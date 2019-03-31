$(document).ready(function(){
	cat();
	brand();
	product();
	function cat(){
		$.ajax({
			url : "actions.php",
			method :"POST",
			data : {category:1},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	}
	$("#momoPay").click(function(){
		//alert(0);
		mobilePayment();
	})
	function mobilePayment(){
		$.ajax({
			headers: { 
        Accept : "text/plain; charset=utf-8",
        "Content-Type": "application/json"
    },
			dataType:"json",
			url : "https://api.havanao.com/api/sale/purchase",
			method :"POST",
			data : {
		      "amount": "500",
		      "customer": "250788394633",
		      "transactionid": "1231412asdfsd",
		      "comment": "Mobile Money Payment"
            },
			success : function(data){
				alert(data);
				//$("#get_brand").html(data);
			},
               error: function (data, Errtext) {
                  alert("some error occured");
               }
		})
	}
	function brand(){
		$.ajax({
			url : "actions.php",
			method :"POST",
			data : {brand:1},
			success : function(data){
				$("#get_brand").html(data);
			}
		})
	}
	function product(){
		$.ajax({
			url : "actions.php",
			method : "POST",
			data : {getProduct:1},
			success : function(data){
				$("#getProduct").html(data);
			}
		})
	}
	$("body").delegate(".sizes","click",function(){
		var  sid =$(this).attr("sid");
		$.ajax({
			url : "actions.php",
			method : "POST",
			data : {get_selected_sizes:1,sid:sid},
			success : function(data){
				$("#getProduct").html(data);
			}
		})
	})
	$("body").delegate(".category","click",function(event){
		var  cid =$(this).attr("cid");
		$.ajax({
			url : "actions.php",
			method : "POST",
			data : {get_selected_category:1,cid:cid},
			success : function(data){
				$("#getProduct").html(data);
			}
		})
	})
	$("#search_btn").click(function(event){
		var keyword = $("#searching").val();
		if (keyword!="") {
			$.ajax({
				url : "actions.php",
				method : "POST",
				data : {Searching:1,key:keyword},
				success : function(data){
					$("#getProduct").html(data);
				}
			})
		}
	})
	
$("#loginss").click(function(event){
	event.preventDefault();
	var email=$("#emails").val();
	var pass=$("#passwords").val();
	//alert(email);
	$.ajax({
		url: "login.php",
		method: "POST",
		data :{userLogin:1,userEmail:email,userPass:pass},
		success :function(data){
			//alert(data);
			if (data=="managerjffkjsaeahdjdruhdia") {
				 window.location.href="admin/manage.php";
			}
			else if (data == "trueigjdjffkjsaeahdjdruhdia") {
				window.location.href="profile.php";
			}
			else if(data=="adminksll;eowiousd"){
                window.location.href="admin/index.php";
			}

			else
			{
				$("#loginmsg").html(data);
			}
		}
	})
})

$("body").delegate("#product","click",function(event){
event.preventDefault();
var p_id=$(this).attr('pid');
//alert(p_id);
$.ajax({
	url :"actions.php",
	method: "POST",
	data :{addToProduct:1,proId:p_id},
	success: function(data){
           $("#messages").html(data);
           cart_count();
	}
})
})
cart_container();
function cart_container(){
	$.ajax({
	url :"actions.php",
	method: "POST",
	data :{get_cart_product:1},
	success: function(data){

           $("#cart_products").html(data);
	}
})
};
cart_count();
function cart_count(){
	$.ajax({
	url :"actions.php",
	method: "POST",
	data :{cart_count:1},
	success: function(data){

           $("#counting").html(data);
	}
})
}

$("#cart_container").click(function(event){
	$.ajax({
	url :"actions.php",
	method: "POST",
	data :{get_cart_product:1},
	success: function(data){

           $("#cart_products").html(data);
           cart_count();
	}
})
})
cart_checkout();
function cart_checkout(){

	$.ajax({
		url : "actions.php",
		method : "POST",
		data : {cart_checkout:1},
		success : function(data){
			$("#cart_checkouts").html(data);
		}
	})
}
$("body").delegate(".qty","keyup",function(){
	var pid=$(this).attr("pid");
	var qty=$("#qty-"+pid).val();
	var price=$("#price-"+pid).val();
	var total=qty*price;
	$("#total-"+pid).val(total);
})
$("body").delegate(".remove","click",function(event){
	event.preventDefault();
	var pid=$(this).attr("remove_id");
	$.ajax({
		url : "actions.php",
		method :"POST",
		data : {removeFromCart:1,remId:pid},
		success : function(data){
			$("#cart_messages").html(data);
			cart_checkout();
		}
	})
})
$("body").delegate(".update","click",function(event){
	event.preventDefault();
	var pid=$(this).attr("update_id");
	var qty=$("#qty-"+pid).val();
	var price=$("#price-"+pid).val();
	var total=$("#total-"+pid).val();
	$.ajax({
		url : "actions.php",
		method : "POST",
		data : {updateCart:1,productId:pid,qty:qty,price:price,total:total},
		success : function(data){
			$("#cart_messages").html(data);
			cart_checkout();
		}
	})
})
page();
function page(){
	$.ajax({
		url : "actions.php",
		method : "POST",
		data : {page:1},
		success : function(data){
			$("#pagination").html(data);
		}
	})
}
$("body").delegate("#page","click",function(event){
	event.preventDefault();
	var pn= $(this).attr("page");
	//alert(pn);
	$.ajax({
		url : "actions.php",
		method : "POST",
		data : {getProduct:1,setPage:1,pageno:pn},
		success : function(data){
			//alert(data);
			$("#getProduct").html(data);
		}
	})
})
$("#sendmsg").click(function(event){
	event.preventDefault();
	var emails=$("#emails").val();
	var msgs=$("#msgs").val();
      //alert(emails);
	$.ajax({
		url : "actions.php",
		method : "POST",
		data : {sendMessage:1,email:emails,message:msgs},
		success :function(data){
			$("#comments").html(data);
		}
	})
})
})
function get_chatting(){
	//alert(0);
			if (form1.message.value =='') {
				alert('all fields are mandatory');
				return;

			}
			//form1.uname.readOnly = true;
			//form1.uname.style.border = 'none';
			//var uname=form1.uname.value;
			var msg= form1.message.value;
			var xmlhttp= new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState==4&&xmlhttp.status==200) {
					document.getElementById('chatlogs').innerHTML= xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','insert.php?message='+msg,true);
			xmlhttp.send();
		};
		$("chatting").ready(function(e){
			
			$.ajaxSetup({
				cashe:false
				
			

			});
			setInterval(function(){
				$('#chatlogs').load('logs.php');
			},2000);
		});