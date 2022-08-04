@extends('templates.fullbleedheader')
@section('featureImage')
	<img class="feature" src="https://ucarecdn.com/ae098182-a80a-4327-afe6-c8f5a29be62a/35617212_642802826074707_4451145385057976320_n.jpg" width="480" alt="Barista Joe Catering a Wedding">
  <br/>
  <img class="feature" src="https://ucarecdn.com/34750832-611a-4bcd-bd5a-87a746bce6f3/21910166_1242570992555042_2567615716807147520_n.jpg" alt="Catering Camper">
@stop
@section('pageTitle')
	Catering, Bulk, & Wholesale By Endgrain
@stop
@section('pageSubtitle')
	Caffeinating Your Needs
@stop
@section('body')
  <section class="text-lg">
    <p class="mb-6">No matter if your special event is a wedding, corporate gather, school function, fundraising event, or something else, Endgrain is proud to offer catering services as well as bulk and wholesale. Whether you need bulk-order roasted coffee beans, our ice-cold, bubbly Nitro Cold Brew, or specialty drinks like lattes and cappucinos, the Endgrain team are able to make your experience a memorable one.</p>
    <p class="mb-6">For your convenience, we have provided some information about a <em>few</em> of our popular options down below. We understand that every event is different and your needs are unique, so feel free to <a href="#contact">contact us</a> to see how we accomodate your requests. For your convenience, we are available to have consultations over the phone or via email; you're welcome to stop by in-person to get a feel for the Endgrain style, too.</p>
  </section>
</div>
@stop
@section('body2')
  <div class="prose my-16">
    <h2>Popular Options</h2>
  </div>
  <div class="md:flex flex-wrap justify-between mb-16">
    <section class="md:max-w-6xl order-2 md:order-1 prose">
      <h3 class="prose">Espresso Drinks</h3>
      <p class="prose">Lattes, Cappucinos, Americanos, Affogatos, oh my! One of our more popular options for on-site service, full service espresso drinks are a sure fire way to spice up any event. Whether you need to wake up that corporate event, get your students energized and excited, or kick off the wedding reception with an extra shot o' joe, our professional baristas will be ready to make any number of espresso drinks for your guests.</p>
    </section>
    <section class="md:w-3/12 order-1 md:order-2">
      <img class="img-responsive catering rounded-lg shadow-2xl" src="https://ucarecdn.com/bdf7d7f6-e308-4fd6-8d68-90b306c64521/37105647_201489290519178_2037428800416907264_n.jpg" alt="Latte and Espresso">
    </section>
  </div>
  <div class="md:flex flex-wrap justify-between mb-16">
    <section class="md:max-w-6xl order-2 md:order-1 prose">
      <h3 class="prose">Cold Brewed Coffee</h3>
      <p class="prose">The sweeter sister of iced coffee, cold brewed coffee never touches hot water which means that it's not bitter. The cold brewing process imbues rich, chocolatey notes and makes for a refreshing treat for your guests. Even if your guests take some coffee with their cup of cream (it's okay, we don't judge 😉), they'll be surprised at just how smooth and refreshing an Endgrain Cold Brew can be.</p>
    </section>
    <section class="md:w-3/12 order-1 md:order-2">
      <img class="img-responsive catering rounded-lg shadow-2xl" src="https://ucarecdn.com/7c13f04b-d4fe-4872-bd4c-10b21b5b1ab4/18013950_398680717183217_7954317528551915520_n.jpg" alt="Cold Brew">
    </section>
  </div>
  <div class="md:flex flex-wrap justify-between mb-16">
    <section class="md:max-w-6xl order-2 md:order-1 prose">
      <h3 class="prose">Nitro Cold Brewed Coffee</h3>
      <p class="prose">It looks like a Guiness, tastes like oh-so-goodness. Our Nitro Cold Brewed coffee takes cold brew to the next level by being pressured with nitrogen for over twenty-four hours, giving it a bubbly, creamy taste. Smooth, creamy, and slightly sweet, you'll have guests lining up for more after they try their first glass of our Nitro Cold Brewed coffee.</p>
    </section>
    <section class="md:w-3/12 order-1 md:order-2">
      <img class="img-responsive catering rounded-lg shadow-2xl" src="https://ucarecdn.com/f690835c-dadd-478d-9758-fac2ae906c0a/30829409_1271749042958040_4470753602981330944_n.jpg" alt="Cold Brew">
    </section>
  </div>
  <div class="md:flex flex-wrap justify-between">
    <section class="md:max-w-6xl order-2 md:order-1 prose">
      <h3 class="prose">Batch Brewed Coffee</h3>
      <p class="prose">They call it classic for a reason: because there's little else that can come close to standing the test of time. Batch-brewed coffee is always a crowd pleaser and with our selection of locally-roasted beans from which to choose, you can bet on your guests asking you, "Is there more?"</p>
    </section>
    <section class="md:w-3/12 order-1 md:order-2">
      <img class="img-responsive catering rounded-lg shadow-2xl" src="https://ucarecdn.com/d573c1f7-7e71-494d-90a8-81a3e35dafcf/43729884_397495004123378_1734688744095634459_n.jpg" alt="Cold Brew">
    </section>
  </div>
  {{-- <form action="{{ url('contact') }}" method="POST" class="hidden">
    {{ csrf_field() }}
    <div class="form-group">
      <label name="name">Name</label>
      <input type="text" name="name" maxlength="128" required>
    </div>
    <div class="form-group">
      <label name="email">Email</label>
      <input type="email" name="email" maxlength="255" required>
    </div>
    <div class="form-group">
      <label name="message">Message</label>
      <textarea name="message"cols="30" rows="10" maxlength="1000" required>
      </textarea>
    </div>
    <input type="submit" value="Send us a message">
  </form> --}}
@stop
