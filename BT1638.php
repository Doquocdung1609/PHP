<?php
    $a = $b = $result = $cal ='';
    if(!empty($_GET)){
        if(isset($_GET['a'])){
        $a = $_GET['a'];
    }
        if(isset($_GET['b'])){
        $b = $_GET['b'];
    }
        if(isset($_GET['cal'])){
        $cal = $_GET['cal'];
    }
    switch ($cal) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo máy tinh căn bản bằng PHP</title>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">
   table{
    background-color: grey;
    margin: auto;
    width: 200px;
}

#result{
    width: 309px;
    height: 70px;
    font-weight: bold;
    font-size: 25px;
}

.btn{
    width: 60px;
    height: 55px;
    
}

#equ{
    width: 60px;
    height: 120px;
   
}
#zero{
    width: 125px;
    height: 55px;
}

</style>


</head>
<body>
    <form method = "get" action="" id="calculator" style="display:none">
        <input required="true" type="number" name="a" placeholder="Enter A" value="<?=$a?>">
        <input required="true" type="number" name="b" placeholder="Enter B"value="<?=$b?>">
        <select name="cal" required = "true" >
        <option value="">Chon phep tinh</option>
        <option value="+" <?=($cal=='+')?'selected':''?>>+</option>
        <option value="-"<?=($cal=='-')?'selected':''?>>-</option>
        <option value="*"<?=($cal=='*')?'selected':''?>>*</option>
        <option value="/"<?=($cal=='/')?'selected':''?>>/</option>
        <option value="%"<?=($cal=='%')?'selected':''?>>%</option>
        </select>

        <button type="submit">Submit</button>
        <p style="font-size: 20px; color:red">
        KET QUA: <?=$result?>
        </p>
    </form>
    <table>
    <tr>
        <td colspan = "7"><input id="result" type="text" value="<?=($a.$cal.$b .'='. $result)?>"></td>
    </tr>
    <tr>
        <td><input class="btn" type="button" value="7"></td>
        <td><input class="btn" type="button" value="8"></td>
        <td><input class="btn" type="button" value="9"></td>
        <td><input class="btn" type="button" value="/"></td>
        <td><input class="btn" type="button" value="C"></td>
    </tr>
    <tr>
        <td><input class="btn" type="button" value="4"></td>
        <td><input class="btn" type="button" value="5"></td>
        <td><input class="btn" type="button" value="6"></td>
        <td><input class="btn" type="button" value="*"></td>
        <td><input class="btn" type="button" value="AC"></td>
    </tr>
    <tr>
        <td><input class="btn" type="button" value="1"></td>
        <td><input class="btn" type="button" value="2"></td>
        <td><input class="btn" type="button" value="3"></td>
        <td><input class="btn" type="button" value="-"></td>
        <td rowspan="2"><input class="btn" type="button" id="equ" value="="></td>
    </tr>

    <tr>
        <td colspan = "2"><input type="button" id="zero" class="btn" value="0"></td>
        <td><input class="btn" type="button" value=","></td>
        <td><input class="btn" type="button" value="+"></td>
    </tr>

    </table>

<!-- Bat xu kien jQuery -->
    <script type="text/javascript">
        var a;
        var b;
        var cal;
        $(function(){
            // click vao the input nao thi the do se duoc dung o su kien click
            $('.btn').click(function(){
                // Lay gia tri dau vao
                var x = $(this).val()
                switch (x) {
                    case '+':
                    case '-':
                    case '*':
                    case '/':
                        $('[name=cal]').val(x)
                        break;
                    case '=':
                        //submit data
                        $('#calculator').submit()
                    break;
                    case 'AC':
                    case 'C':
                        $('[name = a]').val('')
                        $('[name = cal]').val('')
                        $('[name = b]').val('')
                    break;

                    case '1':
                    case '2':
                    case '3':
                    case '4':
                    case '5':
                    case '6':
                    case '7':
                    case '8':
                    case '9':
                    case ',':
                    a += x;
                    if(a.split('.').length >= 3){
                        a =  parselfoat(a)
                    }
                    console.log(a);
                    break;
    
                   
                    default:
                        if($('[name=cal]').val() != ''){
                            // nhap cho b (Lam kieu noi chuoi)
                            $('[name=b]').val($('[name=b]').val()+x)
                        }else{
                            // nhap cho a
                            $('[name=a]').val($('[name=a]').val()+x)
                        }
                    break;
                }
                $('#result').val($('[name=a]').val() + $('[name=cal]').val() + $('[name=b]').val())
            })
        })

        
    </script>
</body>
</html>