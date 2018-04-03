@extends('templates.default')
@section('alerts')
	<p>We just turned 3! To help us celebrate, you can grab a Cold Brew/Nitro, small latte, or pour over for just $3.00 all month.</p>
@stop
@section('intro')
	<p>Endgrain Coffee Bar is proud to introduce the first Nitro tap in South Jersey. Nitro is a slightly effervescent, ice-cold coffee on tap that is equal parts chocolatey and silky smooth; Cold brewed over 24 hours, and then placed under nitrogen pressure to add a smooth creaminess to coffee. Nitro will excite your taste buds and is a summer time cold coffee you can get excited about. Come in and give it a try today.</p>
	<p>We are located in the heart of Historic Pitman New Jersey just off of the ever-popular Broadway strip. With lots of small, quirky shops around the strip, Endgrain is perfectly located to caffeinate your trip to Uptown Pitman.</p>
@stop
@section('aboutus')
	<p>Endgrain coffee is a small coffee bar in Pitman, NJ specializing in handcrafted, high quality coffee drinks. We were the first to have a Nitro iced coffee tap in south Jersey and are constantly working to create new and fun coffee based drinks for our customers. We strive to provide the best coffee experience in the area specializing in small batch, high quality blends and Single Origin beans. Endgrain frequently works with local businesses to provide a range of partnerships and services such as wholesale beans, coffee concentrates for Pitman's Kelly Green Brewing Company coffee porter beer, and espresso concentrates for Pitman's Alaura Kitchen and Candy espresso ice cream.</p>
  <p>In 2016 we began roasting our own coffee beans, allowing us to provide a wide variety of craft roasted coffees from around the world. Whether you're looking for fruity Ethiopian beans, chocolatey Central American beans, or premium geisha bean, there's something for you. Just ask one of our friendly baristas for help picking out the perfect roast to caffeinates your day. Try your beans in a pourover and take a bag home to keep the goodness going. If you can't stop by, that's not a problem. Endgrain operates on online store where you can buy cold brew pouches, whole beans, merch, gift certificates, travel mugs, and more.</p>
@stop
@section('services')
	<div class="table-responsive col-md-3"> 
    <div class="flex-header">
      <h2>Basics</h2><img class="mini" src="img/cup-outline.svg">
    </div>
    <hr class="hidden-sm hidden-xs">         
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price (sm/lg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Drip Coffee (Sm.)</td>
          <td>2/2.5</td>
        </tr>
        <tr>
          <td>Pourover</td>
          <td>4.25</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive col-md-3">
    <div class="flex-header">
      <h2>Espresso</h2><img class="mini" src="img/espresso-machine.svg">
    </div>
    <hr class="hidden-sm hidden-xs">
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price (sm/lg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Latte</td>
          <td>3.75/4.75</td>
        </tr>
        <tr>
          <td>Cappucino</td>
          <td>3.75/4.75</td>
        </tr>
        <tr>
          <td>Espresso Shot</td>
          <td>2/3</td>
        </tr>
        <tr>
          <td>Americano</td>
          <td>2.25/2.75</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive col-md-3">
    <div class="flex-header">
      <h2>Specialty</h2><img class="mini" src="img/tea.svg">
    </div>
    <hr class="hidden-sm hidden-xs">
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price (sm/lg)</th>
        </tr>
      </thead>
      <tbody>
        </tr>
        <tr>
          <td>Hot Tea</td>
          <td>2/2.5</td>
        </tr>
        <tr>
          <td>Hot Chocolate</td>
          <td>3.25/3.75</td>
        </tr>
        <tr>
          <td>Green/Chai Latte</td>
          <td>4.25</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive col-md-3">
    <div class="flex-header">
      <h2>Cold</h2><img class="mini" src="img/iced.svg">
    </div>
    <hr class="hidden-sm hidden-xs">
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price (sm/lg)</th>
        </tr>
      </thead>
      <tbody> 
        <tr>
          <td>Nitro</td>
          <td>4.25</td>
        </tr>
        <tr>
          <td>Cold Brew</td>
          <td>3.25</td>
        </tr>
        <tr>
          <td>Iced Latte</td>
          <td>4.75</td>
        </tr>
        <tr>
          <td>Iced Tea</td>
          <td>2.5</td>
        </tr>
      </tbody>
    </table>
    <h2 class="hidden-md hidden-lg">Extras</h2>
    <table class="table hidden-md hidden-lg">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price (sm/lg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><em>Additional Flavor</em></td>
          <td>0.5</td>
        </tr>
        <tr>
          <td><em>Extra Shot</em></td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop
@section('contactus')
  <div class="col-lg-4 col-md-4">
    <h3>Find us online:</h3>
    <div class="col-lg-4 col-md-4 col-xs-4 centred">
      <a class="social-bug" href="https://twitter.com/EndgrainCoffee"><img src="https://beanstalk-production-f.squarecdn.com/sites/assets/templates/social-twitter@2x-87ca214ff9060e5cd6033fd2c39fd8b1.png"></a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4 centred">
      <a class="social-bug" href="https://www.facebook.com/EndgrainCoffee"><img src="https://beanstalk-production-f.squarecdn.com/sites/assets/templates/social-fb@2x-d49ceec6a8200f549b1507a95258f340.png"></a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4 centred">
      <a class="social-bug" href="https://www.instagram.com/EndgrainCoffee"><img src="https://beanstalk-production-f.squarecdn.com/sites/assets/templates/social-ig@2x-ccad63ccc5ce5f7d0bdea783259960f4.png"></a>
    </div>
  </div>
  <div class="table-responsive col-lg-4 col-md-4">
    <h3>Hours:</h3>
    <table class="table t-righty">
      <tr>
        <td><strong>Sunday</strong></td>
        <td>9:00 am – 2:00 pm</td>
      </tr>
      <tr>
        <td><strong>Monday</strong></td>
        <td>8:00 am – 2:00 pm</td>
      </tr>
      <tr>
        <td><strong>Tuesday</strong></td>
        <td>8:00 am – 5:00 pm</td>
      </tr>
      <tr>
        <td><strong>Wednesday</strong></td>
        <td>8:00 am – 5:00 pm</td>
      </tr>
      <tr>
        <td><strong>Thursday</strong></td>
        <td>8:00 am – 5:00 pm</td>
      </tr>
      <tr>
        <td><strong>Friday</strong></td>
        <td>8:00 am – 5:00 pm</td>
      </tr>
      <tr>
        <td><strong>Saturday</strong></td>
        <td>8:00 am – 2:00 pm</td>
      </tr>
    </table>
  </div>
  <div class="col-lg-4 col-md-4">
    <h3>Find us offline:</h3>
      <div class="row-fluid">
        <div class="col-lg-6 col-md-6 col-xs-6">
          <strong><address>3 Second Ave<br>
          Pitman, NJ 08312
          </address></strong>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-6 righty">
          <a href="mailto:endgraincoffee@gmail.com">Email Us</a>
          <br>
          <a href="tel:18565538887">Call Us</a>
        </div>
     </div>
  </div>
@stop
