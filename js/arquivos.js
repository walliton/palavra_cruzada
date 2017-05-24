    var timeId;
    var totaltem;
    var sHors = "0"+0; 
	var sMins = "0"+0;
	var sSecs = -1;
//contador de tempo
	function getSecs(){
		sSecs++;
		if(sSecs==60){sSecs=0;sMins++;
	    if(sMins<=9)sMins="0"+sMins;
	    }
		if(sMins==60){sMins="0"+0;sHors++;
	    if(sHors<=9)sHors="0"+sHors;
		}
		if(sSecs<=9)sSecs="0"+sSecs;

		if(paracont == 1){
				clearTimeout(timeId);
				sHors = "0"+0;
				sMins = "0"+0;
				sSecs = -1;
				cont = 0;
				return false;
				
			}

	clock1.innerHTML=sHors+"<font color=#000000>:</font>"+sMins+"<font color=#000000>:</font>"+sSecs;
	    timeId = setTimeout('getSecs()',1000);
	    	totaltem = (sHors+":"+sMins+":"+sSecs);
		}


//Abrir os links na div
 $(document).ready(function(){
	   $('#paghome').live('click',function(){
           $('#conteudo').load('imagem.php');
 		 return false;
	   });
        $('#pagcadastro').live('click',function(){
           $('#conteudo').load('cadastro.php');
 		 return false;
	   });
        $('#pagcomojogar').live('click',function(){
           $('#conteudo').load('como_jogar.php');
 		 return false;
	   });
        $('#pagseuspontos').live('click',function(){
           $('#conteudo').load('pontos.php');
 		 return false;
	   });
        $('#paglogin').live('click',function(){
           $('#conteudo').load('logar.php');
 		 return false;
	   });
        $('#paginserir').live('click',function(){
           $('#conteudo').load('insere.php');
 		 return false;
	   });
        $('#pagretirar').live('click',function(){
           $('#conteudo').load('retirar.php');
 		 return false;
	   });
        $('#pagadmin').live('click',function(){
           $('#conteudo').load('admin_char.php');
 		 return false;
	   });
        $('#pagpala').live('click',function(){
           $('#conteudo').load('pala.php');
            clearTimeout(timeId);
            sHors = "0"+0;
            sMins = "0"+0;
            sSecs = -1;
 		 return false;
	   });
     //botão logout
        $('#paglogout').live('click',function(){
             $.ajax({
                type: 'POST',
                url: 'logout.php',
                data: '',
                cache: false,
                success: function( data ) {
                    alert( data );
                     $('#conteudo').load('imagem.php');
                     setTimeout(' atualizamenu()');
                     setTimeout('atualizausuario()');
                },
              });
               
	   });
        
     //botão login
         $("#btnlogin").live('click',function(){
            var dadosajax = {
                'campo1' : $("#login_id").val(),
                'campo2' : $("#senha_id").val()
            };
             
                //validando campos
                var validar1 = $("#login_id").val();
                var validar2 = $("#senha_id").val();
                    if((validar1 != "" && validar1 != null) &&  (validar2 != "" && validar2 != null)){      
                    pageurl = 'login.php';
                    $.ajax({
                        url: pageurl,
                        data: dadosajax,
                        type: 'POST',
                        cache: false,
                        error: function(){
                            alert('Erro: Ao tentar fazer login!!');
                        },
                        success: function( data )
                        { 
                                alert( data );
                                $('#conteudo').load('imagem.php');
                                setTimeout(' atualizamenu()');
                                setTimeout('atualizausuario()');

                                }


                            });
                    }else{ 
                    alert('Todos os campos precisam ser preenchidos');
                        $('#conteudo').load('logar.php')
        }   
    });
     
          //botão cadastro
         $("#btncadastro").live('click',function(){
            var dadosajax = {
                'campo1' : $("#login_cadastro").val(),
                'campo2' : $("#senha_cadastro").val()
            };
             
                //validando campos
                var validar1 = $("#login_cadastro").val();
                var validar2 = $("#senha_cadastro").val();
                    if((validar1 != "" && validar1 != null) &&  (validar2 != "" && validar2 != null)){      
                    pageurl = 'cadastrar.php';
                    $.ajax({
                        url: pageurl,
                        data: dadosajax,
                        type: 'POST',
                        cache: false,
                        error: function(){
                            alert('Erro: Ao tentar fazer login!!');
                        },
                        success: function( data )
                        {
                            //retorno de cadastro duplicado
                            if( data == "Usuário já cadastrado"){
                                alert( data );
                                $('#conteudo').load('cadastro.php');
                            }else{
                            //cadastrando usuario
                                alert( data );
                                $('#conteudo').load('imagem.php');
                                setTimeout(' atualizamenu()');
                                setTimeout('atualizausuario()');

                                }

                        }
                            });
                    }else{ 
                    alert('Todos os campos precisam ser preenchidos');
                        $('#conteudo').load('cadastro.php')
        }   
    });
        //botão enviar palavra
         $("#btn-palavra").live('click',function(){
            var dadosajax = {
                'campo1' : $("#nova_palavra").val(),
                'campo2' : $("#enviar_temas").val(),
                'campo3' : "1"
            };
             
                //validando campos
                var validar1 = $("#nova_palavra").val();
                var validar2 = $("#enviar_temas").val();
                    if((validar1 != "" && validar1 != null) &&  (validar2 != "" && validar2 != null)){      
                    pageurl = 'inserir_dados.php';
                    $.ajax({
                        url: pageurl,
                        data: dadosajax,
                        type: 'POST',
                        cache: false,
                        error: function(){
                            alert('Erro: Ao tentar inserir palavra!!');
                        },
                        success: function( data )
                        {
                            //cadastrando palavra
                                alert( data );
                        }
                            });
                    }else{ 
                    alert('Todos os campos precisam ser preenchidos');
                  
                    } 
                    $('#conteudo').load('insere.php');
    });
     
     //botão enviar tema
         $("#btn-tema").live('click',function(){
            var dadosajax = {
                'campo1' : $("#novo_tema").val(),
                'campo4' : "1"
            };
             
                //validando campos
                var validar1 = $("#novo_tema").val();
                    if(validar1 != "" && validar1 != null){      
                    pageurl = 'inserir_dados.php';
                    $.ajax({
                        url: pageurl,
                        data: dadosajax,
                        type: 'POST',
                        cache: false,
                        error: function(){
                            alert('Erro: Ao tentar fazer login!!');
                        },
                        success: function( data )
                        {
                            //cadastrando usuario
                                alert( data );

                                }

                        
                            });
                    }else{ 
                    alert('Todos os campos precisam ser preenchidos');
                    }
                    $('#conteudo').load('insere.php');
    });
     

      //botão retirar palavra
             $("#retirar1").live('click',function(){ 
                 var apagarpalavra = $(this).attr('name');
                var dadosajax = {
                    'campo1' : $("#palavra_retirar"+apagarpalavra).val(),
                    'campo2' : $("#tema_palavra"+apagarpalavra).val()
                };

                    //validando campos
                   $('#conteudo').html("<h1>Estamos processando , Aguarde...</h1><br/><img src='imagem/loading.png'/>"); 
                        pageurl = 'retirar_palavra.php';
                        $.ajax({
                            url: pageurl,
                            data: dadosajax,
                            type: 'POST',
                            cache: false,
                            error: function(){
                                alert('Erro: Ao tentar retirar palavras!!');
                            },
                            success: function( data )
                            {
                                //retirando palavra
                                    alert( data );

                                    }


                                });
                
                        $('#conteudo').load('retirar.php');
        });
     
     //botão retirartema
             $("#retirar2").live('click',function(){
                 var apagartema = $(this).attr('name');
                var dadosajax = {
                    'campo1' : $("#tema_retirar"+apagartema).val()
                };

                    //validando campos
                         $('#conteudo').html("<h1>Estamos processando , Aguarde...</h1><br/><img src='imagem/loading.png'/>");       
                        pageurl = 'retirar_tema.php';
                        $.ajax({
                            url: pageurl,
                            data: dadosajax,
                            type: 'POST',
                            cache: false,
                            error: function(){
                                alert('Erro: Ao tentar retirar tema!!');
                            },
                            success: function( data )
                            {
                                //retirando palavra
                                    alert( data );

                                    }


                                });
                
                        $('#conteudo').load('retirar.php');
        });
     
      //botão rankcompleto
             $("#retirar_tudo").live('click',function(){
                var dadosajax = {
                    'campo10' : $("#arquivo").val()
                };

                    //validando campos
                         $('#conteudo').html("<h1>Estamos processando , Aguarde...</h1><br/><img src='imagem/loading.png'/>");       
                        pageurl = 'limpa_rank.php';
                        $.ajax({
                            url: pageurl,
                            data: dadosajax,
                            type: 'POST',
                            cache: false,
                            error: function(){
                                alert('Erro: Ao tentar apagar tudo!!');
                                $('#conteudo').load('imagem.php');
                            },
                            success: function( data )
                            {
                                //retirando palavra
                                    alert( data );

                                    }


                                });
                
                        $('#conteudo').load('admin_char.php');
        });
     
     //botão retirar alguem do ranking
             $("#retirar_char").live('click',function(){ 
                 var retirar_rank = $(this).attr('name');
                var dadosajax = {
                    'campo1' : $("#char"+retirar_rank).val(),
                    'campo2' : $("#nivel"+retirar_rank).val(),
                    'campo3' : $("#tempo"+retirar_rank).val()
                };

                    //validando campos
                   $('#conteudo').html("<h1>Estamos processando , Aguarde...</h1><br/><img src='imagem/loading.png'/>"); 
                        pageurl = 'delet_rank.php';
                        $.ajax({
                            url: pageurl,
                            data: dadosajax,
                            type: 'POST',
                            cache: false,
                            error: function(){
                                alert('Erro: Ao tentar retirar ranking!!');
                                $('#conteudo').load('imagem.php');
                            },
                            success: function( data )
                            {
                                //retirando palavra
                                    alert( data );

                                    }


                                });
                
                        $('#conteudo').load('admin_char.php');
             });
     
    });

//Atualização de rank em cada 3 seg e menu acada 1 seg
$(document).ready(function(){
    atualizamenu();
    atualizausuario();
	atualiza1();
	atualiza2();
	atualiza3();
	});

	function atualiza1(){
	   $.get('rank_facil.php', function(resultado){
		$('#rank1').html(resultado);
	   })
	   setTimeout('atualiza1()', 3000);
	}


	function atualiza2(){
	   $.get('rank_medio.php', function(resultado){
		$('#rank2').html(resultado);
	   })
	   setTimeout('atualiza2()', 3000);
	}
	function atualiza3(){
	   $.get('rank_dificil.php', function(resultado){
		$('#rank3').html(resultado);
	   })
	   setTimeout('atualiza3()', 3000);
	}
    function atualizamenu(){
	   $.get('menu.php', function(resultado){
		$('#menutop').html(resultado);
	   })
	   
	}
    function atualizausuario(){
	   $.get('usuario.php', function(resultado){
		$('#usuario').html(resultado);
	   })
	   
	}
