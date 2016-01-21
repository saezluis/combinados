<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/scripts.js"></script>
    <title>Combina2</title>
	
	<script type="text/javascript">
		function combinacion(){
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//---- Combinaciones 0X
			if(mortein.checked == false && nugget.checked == false && vanish.checked == false && durex.checked == false && airweek.checked == false){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;				
			}			
			if(morteinM.checked == false && nuggetM.checked == false && vanishM.checked == false && durexM.checked == false && airweekM.checked == false){
				$("#powerLottoM").text("0X");				
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true && nugget.checked == false && vanish.checked == false && durex.checked == false && airweek.checked == false){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;
			}			
			if(morteinM.checked == true && nuggetM.checked == false && vanishM.checked == false && durexM.checked == false && airweekM.checked == false){
				$("#powerLottoM").text("0X");
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == false && nugget.checked == true && vanish.checked == false && durex.checked == false && airweek.checked == false){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;
			}			
			if(morteinM.checked == false && nuggetM.checked == true && vanishM.checked == false && durexM.checked == false && airweekM.checked == false){
				$("#powerLottoM").text("0X");
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == false && nugget.checked == false && vanish.checked == true && durex.checked == false && airweek.checked == false){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;
			}
			if(morteinM.checked == false && nuggetM.checked == false && vanishM.checked == true && durexM.checked == false && airweekM.checked == false){
				$("#powerLottoM").text("0X");
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == false && nugget.checked == false && vanish.checked == false && durex.checked == true && airweek.checked == false){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;
			}
			if(morteinM.checked == false && nuggetM.checked == false && vanishM.checked == false && durexM.checked == true && airweekM.checked == false){
				$("#powerLottoM").text("0X");
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == false && nugget.checked == false && vanish.checked == false && durex.checked == false && airweek.checked == true){
				$("#powerLotto").text("0X");
				document.getElementById("copy_combination").value = 0;
			}
			if(morteinM.checked == false && nuggetM.checked == false && vanishM.checked == false && durexM.checked == false && airweekM.checked == true){
				$("#powerLottoM").text("0X");
				document.getElementById("copy_combinationM").value = 0;
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 2x -----
			//---- mortein -------------
			if(mortein.checked == true){
				if( nugget.checked == true && vanish.checked == false && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
				}
			}
			if(morteinM.checked == true){
				if( nuggetM.checked == true && vanishM.checked == false && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
				}
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true){
				if( nugget.checked == false && vanish.checked == true && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
				}
			}
			if(morteinM.checked == true){
				if( nuggetM.checked == false && vanishM.checked == true && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
				}
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true){
				if( nugget.checked == false && vanish.checked == false && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
				}
			}
			if(morteinM.checked == true){
				if( nuggetM.checked == false && vanishM.checked == false && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
				}
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true){
				if( nugget.checked == false && vanish.checked == false && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
				}
			}
			if(morteinM.checked == true){
				if( nuggetM.checked == false && vanishM.checked == false && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 2x -----
			//---- nugget -------------
			if(nugget.checked == true){
				if( mortein.checked == true && vanish.checked == false && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(nuggetM.checked == true){
				if( morteinM.checked == true && vanishM.checked == false && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(nugget.checked == true){
				if( mortein.checked == false && vanish.checked == true && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(nuggetM.checked == true){
				if( morteinM.checked == false && vanishM.checked == true && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(nugget.checked == true){
				if( mortein.checked == false && vanish.checked == false && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(nuggetM.checked == true){
				if( morteinM.checked == false && vanishM.checked == false && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(nugget.checked == true){
				if( mortein.checked == false && vanish.checked == false && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(nuggetM.checked == true){
				if( morteinM.checked == false && vanishM.checked == false && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 2x -----
			//---- vanish -------------
			if(vanish.checked == true){
				if( mortein.checked == true && nugget.checked == false && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(vanishM.checked == true){
				if( morteinM.checked == true && nuggetM.checked == false && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(vanish.checked == true){
				if( mortein.checked == false && nugget.checked == true && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(vanishM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == true && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(vanish.checked == true){
				if( mortein.checked == false && nugget.checked == false && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(vanishM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(vanish.checked == true){
				if( mortein.checked == false && nugget.checked == false && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(vanishM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 2x -----
			//---- durex -------------
			if(durex.checked == true){
				if( mortein.checked == true && nugget.checked == false && vanish.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(durexM.checked == true){
				if( morteinM.checked == true && nuggetM.checked == false && vanishM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(durex.checked == true){
				if( mortein.checked == false && nugget.checked == true && vanish.checked == false && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(durexM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == true && vanishM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(durex.checked == true){
				if( mortein.checked == false && nugget.checked == false && vanish.checked == true && airweek.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(durexM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && vanishM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(durex.checked == true){
				if( mortein.checked == false && nugget.checked == false && vanish.checked == false && airweek.checked == true){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(durexM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && vanishM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 2x -----
			//---- airweek -------------
			if(airweek.checked == true){
				if( mortein.checked == true && nugget.checked == false && vanish.checked == false && durex.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(airweekM.checked == true){
				if( morteinM.checked == true && nuggetM.checked == false && vanishM.checked == false && durexM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(airweek.checked == true){
				if( mortein.checked == false && nugget.checked == true && vanish.checked == false && durex.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(airweekM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == true && vanishM.checked == false && durexM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(airweek.checked == true){
				if( mortein.checked == false && nugget.checked == false && vanish.checked == true && durex.checked == false){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(airweekM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && vanishM.checked == true && durexM.checked == false){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			if(airweek.checked == true){
				if( mortein.checked == false && nugget.checked == false && vanish.checked == false && durex.checked == true){
					$("#powerLotto").text("2X");
					document.getElementById("copy_combination").value = 2;
					
				}
			}
			if(airweekM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && vanishM.checked == false && durexM.checked == true){
					$("#powerLottoM").text("2X");
					document.getElementById("copy_combinationM").value = 2;
					
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 3x -----
			//---- mortein y nugget-------------
			if(mortein.checked == true && nugget.checked == true){
				if(vanish.checked == true && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(morteinM.checked == true && nuggetM.checked == true){
				if(vanishM.checked == true && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true && nugget.checked == true){
				if(vanish.checked == false && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(morteinM.checked == true && nuggetM.checked == true){
				if(vanishM.checked == false && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			
			if(mortein.checked == true && nugget.checked == true){
				if(vanish.checked == false && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(morteinM.checked == true && nuggetM.checked == true){
				if(vanishM.checked == false && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 3x -----
			//---- nugget y vanish-------------
			if(nugget.checked == true && vanish.checked == true){
				if(mortein.checked == true && durex.checked == false && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(nuggetM.checked == true && vanishM.checked == true){
				if(morteinM.checked == true && durexM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(nugget.checked == true && vanish.checked == true){
				if(mortein.checked == false && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(nuggetM.checked == true && vanishM.checked == true){
				if(morteinM.checked == false && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(nugget.checked == true && vanish.checked == true){
				if(mortein.checked == false && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(nuggetM.checked == true && vanishM.checked == true){
				if(morteinM.checked == false && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 3x -----
			//---- vanish y durex-------------
			if(vanish.checked == true && durex.checked == true){
				if(mortein.checked == true && nugget.checked == false && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if( vanishM.checked == true && durexM.checked == true){
				if( morteinM.checked == true && nuggetM.checked == false && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(vanish.checked == true && durex.checked == true){
				if(mortein.checked == false && nugget.checked == true && airweek.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if( vanishM.checked == true && durexM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(vanish.checked == true && durex.checked == true){
				if(mortein.checked == false && nugget.checked == false && airweek.checked == true){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if( vanishM.checked == true && durexM.checked == true){
				if( morteinM.checked == false && nuggetM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 3x -----
			//---- durex y airweek-------------
			if(durex.checked == true && airweek.checked == true){
				if(mortein.checked == true && nugget.checked == false && vanish.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(durexM.checked == true && airweekM.checked == true){
				if(morteinM.checked == true && nuggetM.checked == false && vanishM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(durex.checked == true && airweek.checked == true){
				if(mortein.checked == false && nugget.checked == true && vanish.checked == false){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(durexM.checked == true && airweekM.checked == true){
				if(morteinM.checked == false && nuggetM.checked == true && vanishM.checked == false){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			if(durex.checked == true && airweek.checked == true){
				if(mortein.checked == false && nugget.checked == false && vanish.checked == true){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
				}
			}
			if(durexM.checked == true && airweekM.checked == true){
				if(morteinM.checked == false && nuggetM.checked == false && vanishM.checked == true){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
				}
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 3x -----
			//---- mortein y vanish y airweek-------------
			if(mortein.checked == true && vanish.checked == true && airweek.checked == true){
					$("#powerLotto").text("3X");
					document.getElementById("copy_combination").value = 3;
			}
			if(morteinM.checked == true && vanishM.checked == true && airweekM.checked == true){
					$("#powerLottoM").text("3X");
					document.getElementById("copy_combinationM").value = 3;
			}
			//---------------------------------------------------------
			
			//mortein	nugget 	vanish 	durex 	airweek
			
			//----Combinaciones 4x -----
			if(mortein.checked == true && nugget.checked == true && vanish.checked == true && durex.checked == true && airweek.checked == false){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == true && nuggetM.checked == true && vanishM.checked == true && durexM.checked == true && airweekM.checked == false){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == false && nugget.checked == true && vanish.checked == true && durex.checked == true && airweek.checked == true){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == false && nuggetM.checked == true && vanishM.checked == true && durexM.checked == true && airweekM.checked == true){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true && nugget.checked == true && vanish.checked == false && durex.checked == true && airweek.checked == true){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == true && nuggetM.checked == true && vanishM.checked == false && durexM.checked == true && airweekM.checked == true){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true && nugget.checked == true && vanish.checked == true && durex.checked == false && airweek.checked == true){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == true && nuggetM.checked == true && vanishM.checked == true && durexM.checked == false && airweekM.checked == true){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			//---------------------------------------------------------
			
			if(mortein.checked == true && nugget.checked == false && vanish.checked == true && durex.checked == true && airweek.checked == true){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == true && nuggetM.checked == false && vanishM.checked == true && durexM.checked == true && airweekM.checked == true){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			//---------------------------------------------------------
			
			//----Combinaciones 5x -----
			if(mortein.checked == true && nugget.checked == true && vanish.checked == true && durex.checked == true && airweek.checked == true){
					$("#powerLotto").text("4X");
					document.getElementById("copy_combination").value = 4;
			}
			if(morteinM.checked == true && nuggetM.checked == true && vanishM.checked == true && durexM.checked == true && airweekM.checked == true){
					$("#powerLottoM").text("4X");
					document.getElementById("copy_combinationM").value = 4;
			}
			
		}
	</script>
	
	<script type="text/javascript">
	
		var form = document.getElementById('M'); // form has to have ID: <form id="formID">
		form.noValidate = true;
		form.addEventListener('submit', function(event) { // listen for form submitting
        if (!event.target.checkValidity()) {
            event.preventDefault(); // dismiss the default functionality
            alert('Este campo es requerido'); // error message
        }
		}, false);
	
	/*
	function validarCampos(){

		if(document.getElementById("nro_fact").value == "" ){
			alert( "Por favor ingrese su número de factura" );
			document.getElementById("nro_fact").focus();
			return false;
		}

		if(document.getElementById("nombre_validate").value == "" ){
			alert( "Por favor ingrese su nombre" );
			document.getElementById("nombre_validate").focus();
			return false;
		}
		
		if(document.getElementById("apellido_validate").value == "" ){
			alert( "Por favor ingrese su nombre" );
			document.getElementById("apellido_validate").focus();
			return false;
		}
		
		if(document.getElementById("telefono_validate").value == "" ){
			alert( "Por favor ingrese su nombre" );
			document.getElementById("telefono_validate").focus();
			return false;
		}

		return( true );

	}*/
	
	</script>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-72574379-1', 'auto');
		ga('send', 'pageview');
	</script>
	
	
	
  </head>
  <body onload="combinacion()">
    <div id="preloader">
      <div id="loader"></div>
    </div>
    <div class="menu_bar"><a href="#" class="bt-menu"><span><img src="img/menu.png"/></span>Menu</a></div>
    <?php
		include "menu.php";
	?>
	<!--
	<nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="combinaciones.html">Combinaciones</a></li>
        <li><a href="premios.html">Premios</a></li>
        <li><a href="#">Bases</a></li>
        <li><a href="ganadores.html">Ganadores</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </nav>
	-->
    <header>
      <div class="ed-container">
        <div class="ed-item base-100 web-100 hd-100">
          <div class="logo-rekkit"><img src="img/logo-rekkit.png"/></div>
			<div class="logos-paquete-top"><img src="img/otros-logos.png" alt=""/></div>
          
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="birdsC"><img src="img/birds.png" alt=""/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.php" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
          <div class="silla2"><img src="img/silla.png" alt=""/></div>
          <div class="tango2"><img src="img/tango.png" alt=""/></div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-2 web-65 hd-60">
          
		  
          <form id="N" method="POST" action="procesar-jugar.php">
            <p>Para participar, ingresa tus datos y número de factura </p>
            <div class="form-sideLL">
	            <input type="text" name="nro_factura" placeholder="Número de factura" required />
	            <input type="text" name="nombre" placeholder="Nombre" required />
	            <input type="text" name="apellido" placeholder="Apellido" required />
	            <input type="text" name="telefono" placeholder="Teléfono (ej: 9 51165286)" required />
	            <?php
					include_once 'config.php';
		
					$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
					$acentos = $conexion->query("SET NAMES 'utf8'");
				
					$registrosComuna=mysqli_query($conexion,"select * from comuna ORDER BY COMUNA_NOMBRE ASC") or die("Problemas en el select:".mysqli_error($conexion));
						
				?>
				<select name="comuna" id="" required>
					<?php
						echo "<option value=\"\">Comuna / ciudad</option>";
						while($reg=mysqli_fetch_array($registrosComuna)){
							$comuna_nombre = $reg['COMUNA_NOMBRE'];
							echo "<option value=\"$comuna_nombre\">$comuna_nombre</option>";
						}
					?>
	            </select>
            </div>
            <!--<div class="sep"></div>-->
            <div class="form-sideRR">
	            <label>Selecciona tu combinación</label>
	            <div class="elige-combi-caja">
	              <div class="logoscombinar">
	                <label for="mortein" name="mortein"><img src="img/mortein.png" alt="Mortein"/></label>
	                <input type="checkbox" name="mortein" id="mortein" onclick="combinacion()"/>
	              </div>
	              <div class="logoscombinar">
	                <label for="nugget" name="nugget"><img src="img/nugget.png" alt="Nugget"/></label>
	                <input type="checkbox" name="nugget" id="nugget" onclick="combinacion()"/>
	              </div>
	              <div class="logoscombinar">
	                <label for="vanish" name="vanish"><img src="img/vanish.png" alt="vanish"/></label>
	                <input type="checkbox" name="vanish" id="vanish" onclick="combinacion()"/>
	              </div>
	              <div class="logoscombinar">
	                <label for="durex" name="durex"><img src="img/durex.png" alt="Durex"/></label>
	                <input type="checkbox" name="durex" id="durex" onclick="combinacion()"/>
	              </div>
	              <div class="logoscombinar">
	                <label for="airweek" name="airweek"><img src="img/airweek.png" alt="Airweek"/></label>
	                <input type="checkbox" name="airweek" id="airweek" onclick="combinacion()"/>
	              </div>
	              <div class="combinacion-duplex">
					<span class="n-texto-implicitoL">esta combinación <br/> multiplica</span>
	              <span id="powerLotto" class="circle"></span>
	              <span class="n-texto-implicitoR">tus opciones <br/> de ganar</span>
	              </div>
				  <input type="text" name="combinacion_send" value="" id="copy_combination" hidden=hidden>
	            </div>
	        </div>
            <input type="submit" value="Enviar combinación"/>
          </form>
		  
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1 web-35 hd-40 ">
        <!-- <h1>Ganas tú, gano yo... <span>Ganamos los 2</span></h1> -->
          <div class="personas"><img src="img/personas.png" class="big"/></div>
		  <!--aqui los logos-->
          <div class="logo-rekkit-left-G"><img src="img/logo-rekkit.png"/></div>
          <div class="adelco-left-G"><img src="img/logo-adelco.png"/></div>
          <form id="M" method="POST" action="procesar-jugar.php" >
            <h2>Para participar, debes ingresar el número de factura y tus datos</h2>
            <input type="text" name="nro_factura" placeholder="Número de factura" id="nro_fact" />
            <input type="text" name="nombre" placeholder="Nombre" id="nombre_validate" />
            <input type="text" name="apellido" placeholder="Apellido" id="apellido_validate" />
            <input type="text" name="telefono" placeholder="Teléfono (ej: 9 51165286)" id="telefono_validate" />
			<?php
					include_once 'config.php';
		
					$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
					$acentos = $conexion->query("SET NAMES 'utf8'");
				
					$registrosComuna=mysqli_query($conexion,"select * from comuna ORDER BY COMUNA_NOMBRE ASC") or die("Problemas en el select:".mysqli_error($conexion));
						
				?>
				<select name="comuna" id="" required>
					<?php
						echo "<option value=\"\">Comuna / ciudad</option>";
						while($reg=mysqli_fetch_array($registrosComuna)){
							$comuna_nombre = $reg['COMUNA_NOMBRE'];
							echo "<option value=\"$comuna_nombre\">$comuna_nombre</option>";
						}
					?>
	            </select>
            <div class="sep"></div>
            <label>Selecciona tu combinación</label>
            <div class="elige-combi-cajaM">
              <div class="logoscombinarM">
                <label for="morteinM" name="morteinM"><img src="img/mortein.png" alt="Mortein"/></label>
                <input type="checkbox" name="morteinM" id="morteinM" onclick="combinacion()"/>
              </div>
              <div class="logoscombinarM">
                <label for="nuggetM" name="nuggetM"><img src="img/nugget.png" alt="Nugget"/></label>
                <input type="checkbox" name="nuggetM" id="nuggetM" onclick="combinacion()"/>
              </div>
              <div class="logoscombinarM">
                <label for="vanishM" name="vanishM"><img src="img/vanish.png" alt="vanish"/></label>
                <input type="checkbox" name="vanishM" id="vanishM" onclick="combinacion()"/>
              </div>
              <div class="logoscombinarM">
                <label for="durexM" name="durexM"><img src="img/durex.png" alt="Durex"/></label>
                <input type="checkbox" name="durexM" id="durexM" onclick="combinacion()"/>
              </div>
              <div class="logoscombinarM">
                <label for="airweekM" name="airweekM"><img src="img/airweek.png" alt="Airweek"/></label>
                <input type="checkbox" name="airweekM" id="airweekM" onclick="combinacion()"/>
              </div>
              <div class="combinacion-duplexM">
				<div class="texto-implicitoLM" style="text-transform:uppercase; color:#fff; display: block; margin-bottom:1em;">esta combinación multiplica</div>
              	<span id="powerLottoM" class="circle"></span>
				<div class="texto-implicitoRM" style="text-transform:uppercase; color:#fff; display: block; margin-top:1em;">tus opciones de ganar</div>
              </div>
			  <input type="text" name="combinacion_send" value="" id="copy_combinationM" hidden=hidden>
            </div>
            <input type="submit" value="Enviar combinación"/>
          </form>
		  
        </div>
      </div>
    </header>
    <footer>
      <div class="ed-container total">
        <div class="ed-item base-50 no-padding web-50 no-padding">
          <div class="adelco"><img src="img/logo-adelco.png"/></div>
        </div>
        <div class="ed-item base-50 no-padding web-50 no-padding">
          <div class="otros-logos"><img src="img/otros-logos.png"/></div>
        </div>
      </div>
    </footer>
    <script>
      $(window).load(function() {
      $('#preloader').fadeOut('slow');
      $('body').css({'overflow':'visible'});
      });
    </script>
  </body>
</html>