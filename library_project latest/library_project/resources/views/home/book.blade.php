 <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Textbook</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>  
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">



          @foreach($data as $data)

            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <!--<span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">-->
                    <h6>{{$data->author_name}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Textbook Details</a>
                  </div>
                </div>
              </div>
            </div>


            @endforeach
            

            
          </div>
        </div>
      </div>
    </div>
  </div>