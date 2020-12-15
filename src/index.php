<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestTask</title>
</head>
<body>
    <button type="button" class="btn" data-id="1">Click 1</button>
    <button type="button" class="btn" data-id="2">Click 2</button>
    <button type="button" class="btn" data-id="3">Click 3</button>
    <button type="button" class="btn" data-id="4">Click 4</button>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    $('.btn').click(function(e){
        e.preventDefault();

        let date = new Date();

        let dd = date.getDate();
        let mm = date.getMonth();
        let yyy = date.getFullYear();
        let h = date.getHours();
        let m = date.getMinutes();
        let s = date.getSeconds();

        if(dd < 10) dd = '0'+dd;
        if(mm < 10) mm = '0'+mm;
        if(h < 10) h = '0'+h;
        if(m < 10) m = '0'+m;
        if(s < 10) s = '0'+s;

        let data = {
            date: dd + '.' +( mm + 1 ) + '.' + yyy + ' ' + h + ':' + m + ':' + s ,
            btn_ID: $(this).data('id')
        }

        $.ajax({
            url: '/backend.php',
            method: 'post',
            data: data,
            success: function (response) {
                console.log(response)
            }
        });
    });

</script>
</body>
</html>