<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $params = [];


    if (is_auth()) {
        $params['allow'] = true;
        $params['user'] = get_user();
    }

    $params['count'] = getBasketCount();

    switch ($page) {
        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            if (!auth($login, $pass)) {
                Die('Не верный логин пароль');
            } else {
                if (isset($_POST['save'])) {
                    makeHashAuth();
                    header("Location: /");
                }
            }
            header("Location: /");

            break;

        case 'logout':
            session_destroy();
            session_start();
            session_regenerate_id();
            setcookie("hash");
            header("Location: /");
            break;

        case 'news':

            $params["news"] = getNews();

            break;
        case 'newspage':
            if ($action=="addlike") {

                echo json_encode(["result" => 1]);
            }
            $content = getNewsContent($id);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;

        case 'feedback':

            doFeedbackAction($params, $action, $id);

            $params['feedback'] = getAllFeedback();

            break;

        case 'catalog':


            $params['goods'] = getAllGoods();
            break;

        case 'goodsedit':
            if (($_SESSION['login'] == admin)) {
                $params['goods'] = getAllGoods();
            } else {
                header("Location: /");
            };
            
            break;

        case 'item':
            $params['good'] = getOneGood($id);
            break;

        case 'goodedit':
            $params['good'] = getOneGood($id);
            break;

        /*case 'itemedit':
            $data = json_decode(file_get_contents('php://input'));
            $id = (int)$data->id;

            itemEdit($id);

            //$params['count'] = getBasketCount();

            header("Content-type: application/json");
            echo json_encode($params);
            $params['good'] = getOneGood($id);
            die();
            
            break;*/

        case 'api':
            if ($action == "buy") {
                $data = json_decode(file_get_contents('php://input'));
                $id = (int)$data->id;

                addToBasket($id);

                $params['count'] = getBasketCount();

                header("Content-type: application/json");
                echo json_encode($params);

                die();
            }
            if ($action == "deleteFromBasket") {
                $data = json_decode(file_get_contents('php://input'));
                $id = (int)$data->id;

                deleteFromBasket($id);

                $params['count'] = getBasketCount();
                $params['summ'] = summFromBasket();
                $params['id'] = $id;

                header("Content-type: application/json");
                echo json_encode($params);
                die();
            }
            if ($action == "addOneToBasket") {
                $data = json_decode(file_get_contents('php://input'));
                $id = (int)$data->id;

                addOneToBasket($id);

                $params['count'] = getBasketCount();
                $params['summ'] = summFromBasket();
                $params['id'] = $id;
                $params['basket'] = getEditedRowBasket($id);

                header("Content-type: application/json");
                echo json_encode($params);
                die();
            }
            if ($action == "deleteOneFromBasket") {
                $data = json_decode(file_get_contents('php://input'));
                $id = (int)$data->id;

                deleteOneFromBasket($id);

                $params['count'] = getBasketCount();
                $params['summ'] = summFromBasket();
                $params['id'] = $id;
                $params['basket'] = getEditedRowBasket($id);   

                header("Content-type: application/json");
                echo json_encode($params);
                die();
            }    
            if ($action == "itemEdit") {
                $data = json_decode(file_get_contents('php://input'));
                $id = (int)$data->id;
                $name = $data->name;
                $description = $data->description;
                $price = $data->price; 

                itemEdit($id,$name,$description,$price);

                header("Content-type: application/json");
                echo json_encode($params);
                die();
            }
            break;

        case "basket":

            $params['basket'] = getBasket();
            $params['summ'] = summFromBasket();

            break;

    }


    return $params;
}





