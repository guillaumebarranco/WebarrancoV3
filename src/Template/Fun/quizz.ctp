<div ng-app="myApp" class="myApp">

	<div ng-controller="Qctrl" class="restcool">

		<div ng-hide="showall">
			<h1>Bienvenue sur la page Quizz de Webarranco !</h1>

			<div class="center">
				<label for="pseudo">Veuillez choisir un pseudo</label>
				<input type="text" name="pseudo" id="pseudo" ng-model="pseudo" />
				<button ng-click="showall=true;">Commencer</button>
			</div>
		</div>
		
		<div ng-show="showall">
			<h2 ng-hide="showme">Choisissez un Quizz</h2>
			<p ng-hide="showme">
				Chaque réponse doit être en UN SEUL MOT ou un seul nombre. <br /><br />
				Lorsque la question demande "combien" ou que la réponse peut être faite en chiffre/nombre, il faut répondre ainsi.
			</p>
		</div>
			
		<?php foreach ($quizz as $key => $this_quizz) { ?>
			<div ng-show="showall">
				<a style="cursor:pointer;" ng-hide="showme" ng-click="
				showme=true;
				qu=<?= $this_quizz['Quizz']['id'] ?>;
				offset=1;
				showme<?= $this_quizz['Quizz']['data'] ?>=true;
				doClickFirst(item, $event);
				">
					<?= $this_quizz['Quizz']['name'] ?>
				</a>
			</div>
		
			<div ng-show="showme<?= $this_quizz['Quizz']['data'] ?>">
				<?= '<h2>Quizz '.$this_quizz['Quizz']['name'].'</h2>' ?>

				<div class="right">
					<div class="vies">
						{{'Vies : '+vies}}
					</div>

					<div class="score">
						{{'Score : '+score}}
					</div>
				</div>
			
				<div ng-if="vies > 0">
					<div style="height: 20px;">
						<div class="animate-show" style="color: red;" ng-show="bad_answer">
							Mauvaise réponse, vous perdez une vie !
						</div>
						<div class="animate-show" style="color: green;" ng-show="good_answer">
							Bonne réponse !
						</div>
					</div>
				</div>
				<div ng-if="vies == 0">
					<div class="animate-show" style="color: red;" ng-show="bad_answer">
						Mauvaise réponse, le Quizz est terminé ! <br />
						<div ng-if="score == 0">
							Vous n'avez eu aucune bonne réponse...
						</div>
						<div ng-if="score == 1">
							Bravo {{pseudo}} votre score est de {{score}} bonne réponse.
						</div>
						<div ng-if="score > 1">
							Bravo {{pseudo}} votre score est de {{score}} bonnes réponses.
						</div>
						
					</div>
				</div>
				
				<div ng-repeat="myData in myDatas">

					<div class="the_data" ng-if="vies > 0">
						{{'Question '+(offset)}}
						<p>
							{{myData.Question.name}}
						</p>
						<div style="color: red;" ng-show="the_error">
							{{txt_error}}
						</div>
						
						<input ng-focus="" type="text" ng-model="myValue.this" required="required" />

						<button ng-click="
						myValue.answer = myData.Question.answer;
						qu=myData.Question.type;
						offset=myData.Question.offset;
						doClick(item, $event);
						">{{valider}}</button>
					</div>

				</div>

				<div>
					<a style="cursor:pointer;" ng-click="
					showme=false;
					showme<?= $this_quizz['Quizz']['data'] ?>=false;
					test=0;
					">{{retour}}</a>
				</div>
			</div>
		
		<?php } ?>
	</div>
</div>

<br><br>

<?= $this->Html->script('angular.min.js') ?>

<script type="text/javascript">

function preg_replace (array_pattern, array_pattern_replace, my_string)  {
	var new_string = String (my_string);
		for (i=0; i<array_pattern.length; i++) {
			var reg_exp= RegExp(array_pattern[i], "gi");
			var val_to_replace = array_pattern_replace[i];
			new_string = new_string.replace (reg_exp, val_to_replace);
		}
		return new_string;
	}


var myApp = angular.module('myApp', []);
        myApp.controller("Qctrl", function($scope, $http) {
        	$scope.vies = 3; // Compteur de vies
        	$scope.score = 0; // Compteur de score
        	$scope.test = 0; // Vérificateur de l'offset de la question

        	$scope.retour = 'Retour';
        	$scope.valider = 'Valider';
            $scope.myDatas = {};
            $scope.myValue = {};
            $scope.txt_error = "Veuillez proposer une réponse";
            $scope.error = false;

            $scope.doClick = function(item, event) {
            	if($scope.myValue.this != null) {
            		$scope.the_error = false;

            		var pattern_accent = new Array("é", "è", "ê", "ë", "ç", "à", "â", "ä", "î", "ï", "ù", "ô", "ó", "ö");
					var pattern_replace_accent = new Array("e", "e", "e", "e", "c", "a", "a", "a", "i", "i", "u", "o", "o", "o");


	            	if(preg_replace(pattern_accent, pattern_replace_accent, $scope.myValue.this.toLowerCase()) == preg_replace(pattern_accent, pattern_replace_accent, $scope.myValue.answer.toLowerCase())) {


	            	 // Si la réponse de l'utilisateur est bonne
	            		$scope.good_answer = true;
	            		$scope.score = $scope.score + 1;
	            	} else { // Si la réponse est fausse
	            		$scope.bad_answer = true;
	            		$scope.vies = $scope.vies - 1;
	            	}

	            	if($scope.vies != 0) { // Si l'utilisateur a encore des vies
	            		$scope.offset = $scope.offset + 1; // On passe à la question suivante
		            	$scope.myValue.this = null;
		            	$scope.myDatas = null;
		                var response = $http.get(WEB_URL+"/other/question/"+$scope.qu+'/'+$scope.offset);

		                response.success(function(data, status, headers, config) {
		                    $scope.myDatas = data.questions;
		                    setTimeout(function(){$scope.bad_answer = false;$scope.good_answer = false;}, 500);
		                });
		                response.error(function(data, status, headers, config) {
		                    alert("AJAX failed!");
		                });
	            	} else { // L'utilisateur n'a plus de vies
	            		$http.get(WEB_URL+"/Score/insertScore/"+$scope.pseudo+"/"+$scope.score+"/"+$scope.myDatas['0']['Question']['type_name']);
	            		//insertScore($name = "", $score = 1, $quizz ="")
	            	}
	            } else { // L'utilisateur n'a rien rentré dans l'input
	            	$scope.the_error = true;
	            }
            }
            $scope.doClickFirst = function(item, event) {
    			// Initialisation du nouveau Quizz
        		$scope.test = 1;
        		$scope.offset = 1;
        		$scope.score = 0;
        		$scope.vies = 3;
        		$scope.bad_answer = false;
        		$scope.good_answer = false;

            	$scope.myValue.this = null;
            	$scope.myDatas = null;
                var response = $http.get(WEB_URL+"/Other/question/"+$scope.qu+'/1');

                response.success(function(data, status, headers, config) {
                    $scope.myDatas = data.questions;
                });
                response.error(function(data, status, headers, config) {
                    alert("AJAX failed!");
                });
            }
        });
	
</script>