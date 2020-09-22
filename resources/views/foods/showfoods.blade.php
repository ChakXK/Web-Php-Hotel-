<section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Меню нашего ресторана</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Наш ресторан вобрал в себя лучшие традиции европейской, испанской и средиземноморской кухни.   Уютная, доброжелательная атмосфера и достойный сервис  - это основные преимущества ресторана. Все вышеперечисленное и плюс доступный уровень цен позволили заведению оказаться в списке лучших ресторанов города</p>
          </div>
        </div>
            @foreach($typefoods as $type => $values)
            <div class="row justify-content-center text-center mb-5">
           <h2 class="heading text-white" >{{$type}}</h2>
            </div>
          <div class="tab-content py-5" id="myTabContent">  
            @foreach($values as $value)
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">{{$value->prise}}$</span>
                    <h3 class="text-white"><p class="text-white">{{$value->name}}</p></h3>
                  </div>
                </div>
              </div>
            @endforeach
            @endforeach
          </div>
        
      </div>
    </section>