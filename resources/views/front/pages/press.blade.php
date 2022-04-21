@extends('layouts.front')

@section('css')

<style >
  body{
  background-color:#fff;
}
</style>

@endsection

@section('content')


<div class="container">
  <div class="row">
   <div class="col-12"> 
    <h3 class="text-center pt-5 pb-5"><b>In the press</b></h3>
  </div>



</div>



<div class="row">
	<div class="col-12">
		<ul class="list-unstyled">
      <li class="media">
        <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo1.PNG')}}" alt="Generic placeholder image">
        <div class="media-body">

         <p class="paragraph"> "Low prices during off-peak hours, the good vein of Happys Hours": a report from the 8pm news broadcast on TF1 on Tuesday, December 19, 2017 with the testimony of a LeCiseau.fr client and a partner hairdresser
         </p>
         <a href="#">Watch the video</a>
       </div>
     </li>

     <li class="media my-4">
      <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo2.PNG')}}" alt="Generic placeholder image">
      <div class="media-body">

       <p class="paragraph">Pierre Kupferman's Eco Chronicle on BFM TV. Focus on the start-up Doctolib. The model is developing in other sectors: La Fourchette in catering, Le Ciseau for hairdressers
       Watch the video</p>
     </div>
   </li>
   <li class="media">
    <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo3.PNG')}}" alt="Generic placeholder image">
    <div class="media-body">
     <p class="paragraph">"For a color cut, this client will pay only 55 euros instead of the 110 displayed in the window. A service half as expensive because it takes place during off-peak hours, when the lounge is usually empty". JT 12'45 from M6 on January 10, 2017: interview with a LeCiseau client and a manager of a partner hair salon.
     See the video</p>
   </div>
 </li>
 <li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo4.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Will the Internet revolutionize the world of hairdressing? (...) a digital platform offers hairdressing salon services at very competitive prices". Passage in France 19 JT 19/20 April 19, 2017
   Watch the video</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo5.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Interview with the co-founder of LeCiseau.fr in the program "Made In France" on Sud Radio on May 22, 2017
   Listen to the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo6.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Interview with the co-founder of LeCiseau.fr in the "Label Entreprise" column of the program "Europe 1 Bonjour" with Raphaëlle Duchemin
   Listen to the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo7.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"With LeCiseau everyone wins: the hairdresser who prefers to fill his salon at peak times and the client who can come during off-peak hours" - "Positive Waves" program on France Bleu with Corentine Feltz
   Listen to the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo8.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"The platform, already present in Toulouse, Bordeaux, Montpellier, Lyon and Saint-Etienne arrives in Paris. (...) From Win Win!" Article published in the January 5, 2018 issue of Grazia and on Grazia.fr
   Read l article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo9.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Offer yourself a 50% cut by going to the hairdresser during off-peak hours? It is possible thanks to the recently launched site: LeCiseau. Filling the empty slots that cost more than they bring in, you had to think about it!" - Publication in ELLE in April 2017 and in April 2018
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo10.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph"> "For those with flexible hours and a limited budget, a French start-up, LeCiseau, allows you to have your hair done in the salon during off-peak hours by paying only 50% of the price." - Publication in Madame Figaro in April 2017 and on Madame Figaro in May 2018
   Read the article</p>
 </div>
</li>
<li class="media my-4">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo11.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph">"Good plan: go to the hairdresser and pay half the price" - Publication in Femme Actuelle in November 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo12.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"In one click, we go to the hairdresser for a cut, a color or a smoothing ... at half price." - Publication in the February 2017 issue of Benefits
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo13.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Book via LeCiseau.fr and benefit from 50% on your hairdressing service." - Publication in the December 2017 issue and publication on Public.fr: "We tested a refresh at Alexandre Henry with LeCiseau" and "We dare the mane of Blake Lively thanks to the Just David salon"
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo14.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"get your hair done at half price!" - LeBonbon
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo15.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"They allow you to pay half the price for the hairdresser" - Publication in the January 2018 issue of Capital and on Capital.fr
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo16.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Make hairdressing accessible to the greatest number without sacrificing the quality of services" - Publication in the national edition of CNews morning of December 7, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo17.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"A session at a lower price, during off-peak hours" - Publication in 20 minutes in December 2016
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo18.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"For a year," Les Echos Executives "offered you to follow the path of the start-up LeCiseau" - 4 articles published in Les Echos in 2017
   Read the article</p>
 </div>
</li>




<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo19.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph"> "LeCiseau.fr completes its first fundraising of one million euros" - Publication in the Journal du Net on July 18, 2017
   Read the article</p>
 </div>
</li>
<li class="media my-4">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo20.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph">"LeCiseau allows hairdressers to make appointments during off-peak hours" - Interview with the co-founder in Frenchweb on June 8, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo21.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Who is LeCiseau.fr, this start-up for hairdressers based on yield management" - Article published in the Digital Factory on November 16, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo22.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"the site to find a hairdresser at half price" - Publication in Biba on November 19, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo23.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"LECISEAU, OR HOW TO PAY -50% AT THE HAIRDRESSER" Published in Paulette on November 27, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo24.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Leciseau.fr fills the salons" - Publication in La Dépêche du Midi on January 31, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo25.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"In the Lyon conurbation, the start-up leciseau.fr brings together hairdressing salons in which it is sufficient to make an appointment during off-peak hours to benefit from a reduction at half price." - Publication in Le Progrès in July 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo26.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Good plan for our hair" - Publication in Sud Ouest in May 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo27.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Take advantage of a 50% reduction at the hairdresser" - Publication in Midi Libre on May 02, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo28.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph"> "LeCiseau invests Paris" - Publication in the January 2018 issue of Coiffure de Paris
   Read article</p>
 </div>
</li>
<li class="media my-4">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo29.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph">"LeCiseau.fr: The startup that fills hair salons during off-peak hours" - Publication in Les Echos Coiffure on January 20, 2017
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo30.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"LeCiseau.fr is hunting during off-peak hours" and " Unec has unveiled some new partnerships " published in the scout of hairdressers
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo31.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">The interview with the co-founder of LeCiseau.fr in the column "The spirit of initiative" by Emmanuel Moreau on January 17, 2018 on France Inter
   Listen to the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo32.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"LeCiseau Disrupte La Coiffure Avec Services À 50%" - Publication in Forbes France on January 18, 2018. And in the file "The key to success: knowing how to ask for help" appeared in the June 2018 issue
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo33.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">""The good idea for the week comes from the LeCiseau.fr site (...) By registering to take advantage of a off-peak or last-minute service, you get a 50% discount compared to the price usually offered "- in the editorial for the week of January 15, 2018 on Beauté-test.com
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo34.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"The platform allows you to book, at the last minute, an appointment in the salon on the empty slots of hairdressers, with a 50% reduction." - published in Closer on January 19, 2018 and on CloserMag.fr
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo35.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"LeCiseau.fr reduces your bill at the hairdresser (and fills in his book of reservations)" #MaddyPitch of January 30, 2018 in Maddyness
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo36.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"With a payment made online and 50% reduction, the price is unbeatable, because it applies regardless of the service reserved (cut, coloring ...)" published in the magazine Femina and on Femina .fr
   Read the article</p>
 </div>
</li>


<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo37.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"-50% on your cut, coloring ... by booking on LeCiseau.fr" published in TV 7 days
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo38.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"By booking on the LeCiseau.fr site, pay half the price of your services at the hairdresser" - published in March 2018 in Prima
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo39.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Go to a hairdresser selected by LeCiseau" published in February 2018 in Infrarouge
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo40.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"LeCiseau.fr cuts short at off-peak hours" - published on April 04, 2018
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo41.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">The note du jour in the Eco column of April 09, 2018, on RTL, by Christian Menanteau: "14/20 at the LeCiseau.fr platform, which offers hairdressers off-peak reservations for half the price for the customer."
   Listen to the chronicle</p>
 </div>
</li>




<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo42.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph"> "LeCiseau.fr references salon reductions of 50% and more on cuts, colors or brushings ..." - published in the May issue of Response to Everything!
   Read the article</p>
 </div>
</li>
<li class="media my-4">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo43.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph">"How to pay half the price for your haircut?" - publication in L'OFFICIEL in April 2018
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo44.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"A cut at a reduced price during off-peak hours" - Publication on May 3, 2018 in Today in France
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo45.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"The start-up aims to become LaFourchette de la coiffure" - Publication on May 3, 2018 in Le Parisien
   Read article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo46.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Question from a reader: "Going to the hairdresser regularly is too expensive for me. So I regretfully space my appointments more and more. Do you know of any more economical solutions?" Editorial response: "The leciseau.fr site allows you to get your hair done for half the price." - May 2018 publication in Le Particulier Pratique
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo47.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Chronicle of Aurélia Bloch: "How to pay less at your store?" - broadcast on May 14, 2018 in the program "C'est au program" de France 2
   Watch the video</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo48.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Fill the lounge during off-peak hours with LeCiseau.fr" - published in the June 2018 issue of Biblond
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo49.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"PAY YOUR HAIRDRESSER AT HALF PRICE, IT'S NOW POSSIBLE!" on Radio Voltage
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo50.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Unbeatable offers that herald a growing return to the hairdresser." publication in The Women's Journal in May 2018
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo51.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph"> "Here's how to pay the hairdresser less!" in the show "C'est que de la tv!" on C8
   Watch the video</p>
 </div>
</li>
<li class="media my-4">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo52.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">

   <p class="paragraph">LeCiseau is "The Challenger" for 01 Net - Published in the issue of May 23, 2018
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo53.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Having your hair cut or colored for half the price is possible" - Publication in the June 2018 issue of "Que Choisir"
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo54.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">"Le Ciseau meets a need that all hairdressing salons have: to fill the off-peak hours of their establishment." Interview with a partner hairdresser on CommentCaMarche.net
   Read the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo55.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Interview with Jean de La Porte, co-founder of LeCiseau.fr, in the "BonPlan" column of Fun Radio
   Listen to the interview</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo56.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Extract from the program Capital on M6, broadcast on Sunday 30/09/2018, presented by Julien Courbet
   Watch the video</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo57.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">On the front page of the August 13, 2018 edition of Ouest-France: "Why women sulk the hairdresser". An analysis of the reasons for the drop in attendance over the past 10 years and the interview with Jean de La Porte, co-founder of LeCiseau, on our ambition to bring more French people back and more often to salons. hairdressing.
   Read the article</p>
 </div>
</li>
<li class="media">
  <img class="mr-3 logo" src="{{asset('front-assets/images/press_page/logo38.PNG')}}" alt="Generic placeholder image">
  <div class="media-body">
   <p class="paragraph">Interview with Jean de La Porte, co-founder of LeCiseau, in the program "3 minutes to convince", November 20, 2018 on BFM Business with Stéphane Soumier.
   See the video</p>
 </div>
</li>


</ul>
</div>
</div>
</div>

@endsection