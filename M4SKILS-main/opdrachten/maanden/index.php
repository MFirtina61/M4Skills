<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$month = 2;
switch ($month) {
    case 1:
    case 'jan':
        echo "Januari";
        break;
    case 2:
    case 'feb':
        echo "Februari";
        break;
    case 3:
    case 'mar':
        echo "Maart";
        break;
    case 4:
    case 'apr':
        echo "April";
        break;
    case 5:
    case 'mei':
        echo "Mei";
        break;
    case 6:
    case 'jun':
        echo "Juni";
        break;
    case 7:
    case 'jul':
        echo "Juli";
        break;
    case 8:
    case 'aug':
        echo "Augustus";
        break;
    case 9:
    case 'sep':
        echo "September";
        break;
    case 10:
    case 'okt':
        echo "Oktober";
        break;
    case 11:
    case 'nov':
        echo "November";
        break;
    case 12:
    case 'dec':
        echo "December";
        break;
    default:
        echo "Ongeldige invoer";
        break;

    
}
?>
    </body>
</html>