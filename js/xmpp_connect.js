var BOSH_SERVICE='http://192.168.0.117:7070/http-bind/';
var connection = null;



function onConnect(status)
{
	//alert(status);
    if (status == Strophe.Status.CONNECTING)
    {
    	
    }
    else if (status == Strophe.Status.CONNFAIL)
    {
	alert('Invalid Login');
	window.location.href='index.php';
    }
    
    else if(status == 4|| status =='4')
    	{
    	alert('Invalid Login');
    	window.location.href='index.php';
    	}
    
    else if (status == Strophe.Status.DISCONNECTING)
    {
	}
    else if (status == Strophe.Status.DISCONNECTED) 
    {
    alert('Disconnected successfull!');
    window.location.href='index.php';
	
    } 
    else if (status == Strophe.Status.CONNECTED) 
    {
	alert('login success');
        connection.send($pres().tree());
        $("#main_body").css('display','block');
    
         
    }
    
}



function logout()
{
	
	connection.disconnect();
}



$(document).ready(function ()
		{
	
	
	username=$("#email").val();
	username=username+"@admin-pc";
	
	password=$("#password").val();
    connection = new Strophe.Connection(BOSH_SERVICE);
    	    connection.connect(username,password,onConnect);

    
});