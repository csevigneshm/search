<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search</title>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




<body>
    <div id="search-box">
        <input id="search" onkeyup="june()" type="text" autocomplete="off" placeholder="Search here" />
        <div id="result"> </div>
    </div>

<script>
    function june()
    {
        
        var inputVal = $('#search').val();
        var resultDropdown = $('#search').siblings("#result");
        if(inputVal)
        {

        $.ajax
        ({
        	type:'post',
        	url:'end.php',
        	data:'val='+inputVal,
        	success:function(resp)
        	{
        		resultDropdown.html(resp);
        	}
        });
        } else
        {
            resultDropdown.empty();
        }
    };


    $(document).on("click", "#result p", function()
    {
        $("#result p").parents("#search-box").find('#search').val($(this).text());
        $(this).parent("#result").empty();
    });

    

</script>

</body>
</head>

</html>