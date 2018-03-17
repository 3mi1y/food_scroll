<?php
function createNonLoggedInNavBar() {
	echo "	
			<!--NavBar Fixed option-->
				<nav class='navbar navbar-inverse navbar-fixed-top'>
	                	<ul class='nav navbar-nav'>
	                   		<li class = 'active'><a href ='HomePage.php'>Home</a></li>
	                    	<li><a href='About.php'>About</a></li>
	                    	<li><a href='AllRecipes.php'>Browse Recipes</a></li>
	                    </ul>
	                
						<!--NavBar dropdown menu-->
						<ul class='nav navbar-nav navbar-right'>
	    						
							<li class ='dropdown'>
								<a href='#' class = 'dropdown-toggle' data-toggle='dropdown'>Sign in/Sign up <span class = 'caret'></span></a>
								<ul class = 'dropdown-menu'>
									<li><a href='SignIn.php'>Sign in</a></li>
									<li><a href='SignUp.php'>Sign up</a></li>
								</ul>
							</li>
						</ul>				
            			</div>
					</div>
				</div>
			</nav>";
};


function createAboutNavBar() {
	echo "	
			<!--NavBar Fixed option-->
				<nav class='navbar navbar-inverse navbar-fixed-top'>
	                	<ul class='nav navbar-nav'>
	                   		<li><a href ='HomePage.php'>Home</a></li>
	                    	<li class = 'active'><a href='About.php'>About</a></li>
	                    	<li><a href='AllRecipes.php'>Browse Recipes</a></li>
	                    </ul>
	                
						<!--NavBar dropdown menu-->
						<ul class='nav navbar-nav navbar-right'>
	    						
							<li class ='dropdown'>
								<a href='#' class = 'dropdown-toggle' data-toggle='dropdown'>Sign in/Sign up <span class = 'caret'></span></a>
								<ul class = 'dropdown-menu'>
									<li><a href='SignIn.php'>Sign in</a></li>
									<li><a href='SignUp.php'>Sign up</a></li>
								</ul>
							</li>
						</ul>				
            			</div>
					</div>
				</div>
			</nav>";
};

function createSignInUpNavBar() {
	echo "	
			<!--NavBar Fixed option-->
				<nav class='navbar navbar-inverse navbar-fixed-top'>
	                	<ul class='nav navbar-nav'>
	                   		<li><a href ='../views/HomePage.php'>Home</a></li>
	                    	<li><a href='../views/About.php'>About</a></li>
	                    	<li><a href='AllRecipes.php'>Browse Recipes</a></li>
	                    </ul>
	                
						<!--NavBar dropdown menu-->
						<ul class='nav navbar-nav navbar-right'>
	    						
							<li class ='dropdown'>
								<a href='#' class = 'dropdown-toggle' data-toggle='dropdown'>Sign in/Sign up<span class = 'caret'></span></a>
								<ul class = 'dropdown-menu'>
									<li><a href='../views/SignIn.php'>Sign in</a></li>
									<li><a href='../views/SignUp.php'>Sign up</a></li>
								</ul>
							</li>
						</ul>				
            			</div>
					</div>
				</div>
			</nav>";
};


function createNavBar() {
	echo "	
			<!--NavBar Fixed option-->
				<nav class='navbar navbar-inverse navbar-fixed-top'>
	                	<ul class='nav navbar-nav'>
	                   		<li class = 'active'><a href ='HomePage.php'>FoodScroll</a></li>
	                    	<li><a href='About.php'>About</a></li>
	                    	<li><a href='AllRecipes.php'>Browse Recipes</a></li>
	                    	<li><a href='UserHomePage.php'>User Home Page</a></li>
	                    	<li><a href='viewRecipes.php'>Your Recipes</a></li>
	                    	<li><a href='newRecipe.php'>New Recipe</a></li>
	                    </ul>
	                
						<!--NavBar dropdown menu-->
						<ul class='nav navbar-nav navbar-right'>
	    						
							<li class ='dropdown'>
								<a href='#' class = 'dropdown-toggle' data-toggle='dropdown'>Sign in/Sign up <span class = 'caret'></span></a>
								<ul class = 'dropdown-menu'>
									<li><a href='SignIn.php'>Sign in</a></li>
									<li><a href='SignUp.php'>Sign up</a></li>
								</ul>
							</li>
						</ul>				
            			</div>
					</div>
				</div>
			</nav>";	
}


/*
<nav class ='navbar navbar-default'>
            <div class='container-fluid'>
            	<div class = 'navbar-header'>
					<a href ='#' class = 'navbar-brand'>FoodScroll</a>
				</div>
						
						
				<!--NavBar Items and dead links-->
				<div>
*/

?>