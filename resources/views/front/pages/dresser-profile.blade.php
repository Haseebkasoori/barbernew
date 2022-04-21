@extends('layouts.front')

@section('content')

	<div class="  container dresser-profile ">
		<div class="row">
			<div class="col-lg-8 img-div ">
				<h2>La coupe</h2>
				<p>
					Que l’on souhaite changer radicalement de coupe de cheveux ou juste l’entretenir, la coupe est un élément essentiel lors d’un rendez-vous chez le coiffeur. Rappelons que couper ne serait-ce que les pointes régulièrement permet aux cheveux de se revigorer. De plus, la coupe est souvent une prestation proposée à moindre coût et maîtrisée parfaitement par les coiffeurs, alors n’hésitez pas à vous lancer.
				</p>
				<img src="{{asset('front-assets/images/dresser-profile/1.jpg')}}" class=" col-lg-12">
				<h2>Une coupe qui reflète votre personnalité</h2>
				<p>
					Une coupe de cheveux est une des premières choses que l’on voit, c’est le reflet de votre personnalité, elle permet d’exprimer votre style et votre goût. Elle sera toujours unique, et même si vous demandez la même coupe que votre voisine, votre nature de cheveux, votre manière de les coiffer, votre couleur ou encore votre longueur sont autant d’éléments qui vont la rendre différente. Cheveux courts, mi longs ou longs, il y en pour tous les goûts.
				</p>
				<h2>La coupe de cheveux est accessible à toutes</h2>
				<p>
					Coupe dégradée, au carré ou garçonne, un coiffeur peut réaliser n’importe quel type de coupe. Grâce à un peigne, des ciseaux ou même une tondeuse, vous pourrez obtenir la coupe dont vous avez envie.En plus d’une coupe, un coiffeur peut réaliser de nombreuses autres prestations : couleur, permanente, lissage, balayage…
				</p>
				<p>
					Selon la forme de votre visage, votre couleur de cheveux, votre style vestimentaire… le coiffeur pourra vous conseiller sur la coupe à adopter. Comme l’a dit Joan Crawford, « la chose la plus importante qu’une femme peut avoir hormis son talent, c’est un bon coiffeur ».
				</p>
				<h2>Coupes sur cheveux secs ou sur cheveux humides ?</h2>
				<p>
					Même si la coupe sur cheveux humide est plus connue, la coupe sur cheveux secs est une technique également utilisée.Elle permet de suivre l’évolution de la coupe au fil des coups de ciseaux, et donc d’exprimer vos envies à votre coiffeur au fur et à mesure.Cette technique est d’autant plus recommandée pour les cheveux bouclés, car lorsque les boucles sont humides, il est plus difficile de prévoir leur comportement.
				</p>
				<p>
					La coupe sur cheveux humides est la technique la plus utilisée par les salons et elle est réalisée sur cheveux propres. Elle est utile lorsque vous souhaitez une coupe droite, et elle est également plus rapide qu’une coupe sur cheveux secs.
				</p>
				<p>
					Si vous ne savez pas quelle méthode choisir, demandez conseil à votre coiffeur, il analysera vos envies et vous proposera la coupe la plus adaptée.
				</p>
			</div>
			<div class="col-lg-4 " >
				<div class="left-side mt-2">
					<h5 class="m-0">Réserver votre prestation</h5>
					




					<div class="input-group ">  
						<div class="input-group-prepend">
							<i class="fa fa-scissors fa-2x icon-padding" aria-hidden="true" ></i>       
						</div>
						<input class="form-control mr-3 offset-  f "  type="overlayText" name="" style=" " >   
					</div> 

					<hr class="mb-0" >

					<div class="input-group  ">
						<div class="input-group-prepend ">
							<i class="fa fa-calendar fa-2x icon-padding" aria-hidden="true"></i>                                
						</div >
						<input class="form-control mr-3 f  "  type="overlayText" name=""    >  

					</div> 

					<hr class="mb-0">
					
					<div class="input-group ">
						<div class="input-group-prepend">
							<i class="fa fa-map-marker fa-2x icon-padding" aria-hidden="true"></i>          
						</div >
					</div> 

					<hr>

					<div style="padding: 15px;">
						<button type="button" class="   btn btn-lg  my-btn" placeholder="" >Rechercher</button>
					</div>




					
				</div>
				<div class="left-side mt-5">
					<div class="ml-0"> <h6 >Les villes les plus recherchées</h6></div>
					<ul>
						<li><a href="">Paris</a></li>
						<li><a href="">Bordeaux</a></li>
						<li><a href="">Lyon</a></li>
						<li><a href="">Toulouse</a></li>
						<li><a href="">Marseille</a></li>
						<li><a href="">Montpellier</a></li>
						<li><a href="">Lille</a></li>
						<li><a href="">Nantes</a></li>
						<li><a href="">Strasbourg</a></li>
						<li><a href="">Nice</a></li>
						<li><a href="">Rennes</a></li>
					</ul>


				</div>
			</div>


		</div>
	</div>
<section class=" pb-5 mb-5 mt-3 bottom-div">	


	<div  class="container-fluid " >
		<div class="row ">
			<div class="col-12"> 
				<h4 class="mb-5 mt-2 text-center"> 
					<b>Discover the other services	</b>
				</h4>
			</div>


			<div class=" col-lg-3">
				<div class="con">
					<img src="{{asset('front-assets/images/dresser-profile/1.jpg')}}"   class="image">
					<div class="overlay ">
						<div class="overlayText"><h1>heading</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor </p>
						</div>
					</div>
				</div>

			</div>  


				<div class=" col-lg-3">
					<div class="con">	
						<img src="{{asset('front-assets/images/dresser-profile/2.jpg')}}"       class="image">
						<div class="overlay ">
							<div class="overlayText"><h1>heading</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor </p></div>
							</div>
						</div> 
					</div> 

					<div class=" col-lg-3">
						<div class="con">	
							<img src="{{asset('front-assets/images/dresser-profile/3.jpg')}}"        class="image">
							<div class="overlay ">
								<div class="overlayText"><h1>heading</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor </p></div>
								</div>
							</div>  
						</div>


						<div class=" col-lg-3">
							<div class="con">
								

								<img src="{{asset('front-assets/images/dresser-profile/1.jpg')}}"        class="image">
								<div class="overlay ">
									<div class="overlayText"><h1>heading</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor </p></div>
									</div>
								</div>  

							</div>



						</div>
					</div>
					
</section>
@endsection