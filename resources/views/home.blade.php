@extends('templates.default')
@section('alerts')
	<h3>New Location, Same Great Coffee.</h3>
	<p>See the exciting changes coming to Endgrain. <a href="/10-pitman-ave"><strong>Learn More »</strong></a></p>
@stop
@section('aboutus')
  <p>Endgrain Coffee Roaster was the first Nitro tap coffee bar in South Jersey. Nitro is a slightly effervescent, ice-cold coffee on tap that is equal parts chocolatey and silky smooth; Cold brewed over 24 hours, and then placed under nitrogen pressure to add a smooth creaminess to coffee. Nitro will excite your taste buds and is a summer time cold coffee you can get excited about. Come in and give it a try today.</p>
  <p>We are located in the heart of Historic Pitman New Jersey at 10 Pitman Ave, just off of the ever-popular Broadway strip. With lots of small, quirky shops around the strip, Endgrain is perfectly located to caffeinate your trip to Uptown Pitman.</p>
	<p>Endgrain specializes in handcrafted, high quality coffee drinks. We were the first to have a Nitro Cold Brew on tap in South Jersey and are constantly working to create new and fun coffee-based drinks for our customers. We strive to provide the best coffee experience in the area specializing in small batch, high quality blends and Single Origin beans. Endgrain frequently works with local businesses to provide a range of partnerships and services such as wholesale beans, coffee concentrates for Pitman's Kelly Green Brewing Company coffee porter beer, Nitro on tap at Bonesaw Brewing of Glassboro, and espresso concentrates for Alaura Kitchen and Candy's espresso ice cream.</p>
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
          <td>Market Price</td>
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
