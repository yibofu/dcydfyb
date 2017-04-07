// JavaScript Document
	$(document).ready(function(){
		$("form :input").blur(function(){
			$(this).parent().find(".a2").remove();
			//�ж�		
			if ($(this).is("#password")){
				if (this.value=="/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/"){
					var hdw1 = $("<span class='a2' id='error'>您的密码不正确请重新输入</span>");
					$(this).parent().append(hdw1);
					}else{
					var hdw1 = $("<span class='a2' id='righta'></span>");
					$(this).parent().append(hdw1);
				}
			}
			//end
			//�ж�
			if ($(this).is("#passwords")){
				if (this.value=="/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/" || this.value!= $("#password").val()){
					var hdw1 = $("<span class='a2' id='error'>两个密码不一致，请重新输入</span>");
					$(this).parent().append(hdw1);
					}else{
					var hdw1 = $("<span class='a2' id='righta'></span>");
					$(this).parent().append(hdw1);
				}
			}
			//end
			//�ж�
			if ($(this).is("#tel")){
				
				if (this.value=="/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/" || isNaN($(this).val()) || this.value.length < 11 ){
					
					var hdw1 = $("<span class='a2' id='error'>您输入手机号不正确</span>");
					
					$(this).parent().append(hdw1);
					
					}else{
						
					var hdw1 = $("<span class='a2' id='righta'></span>");
					
					$(this).parent().append(hdw1);				
				}

			}
			//end

	});	
	//blur  end
		//�ύ
		$("#send").click(function(){
			
			$("form :input").trigger("blur");
			
			var hdw3 = $(".error").length; 
			
			if (hdw3){
				
				return false;
				
				}
			
			alert("ע��ɹ�");	
	
		});
	//end
		//����
		$("#res").click(function(){

			$(".a2").remove();

			});
			//end
		});