<div id="mu-restaurant-menu">
	    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-restaurant-menu-content">
              <h3>แก้ไขรายการส่วนประกอบอาหาร</h3>
	          <ul class="nav nav-tabs mu-restaurant-menu">
	            <li class="active"><a href="#breakfast" data-toggle="tab">เส้น</a></li>
	            <li><a href="#meals" data-toggle="tab">น้ำซุป</a></li>
	            <li><a href="#snacks" data-toggle="tab">เครื่อง</a></li>
	            <li><a href="#desserts" data-toggle="tab">คุณสมบัติอื่นๆ</a></li>
	          </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <form action="{{ url('admin/ingredient') }}" method="post" name="form_noodle_ingredient">
                        <!-- div.wrap-form-ingredient>div*7>label[for="noodle$"]{$}+input#noodle$.louse-input[name="noodle$"]+label[for="nprice$"]{ราคา}+input#nprice$.louse-input[name="nprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rnincrement$"]{ราคาปกติ}+input#rnincrement$.louse-input[type="radio" name="rn$" checked]+label[for="rnreplacement$"]{ราคาพิเศษ}+input#rnreplacement$.louse-input[type="radio" name="rn$"]+label[for="rnadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rnadditional$.louse-input[type="radio" name="rn$"]+div>input.mu-send-btn[type="submit" name="nsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="noodle" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                        {{--*/ $i=1; $inc = $rep = $add = ""; /*--}}
                        @foreach($noodle as $n)
                          @if($n->traits == "increment")
                            {{--*/ $inc = "checked"; /*--}}
                          @elseif($n->traits == "replacement")
                            {{--*/ $rep = "checked"; /*--}}
                          @elseif($n->traits == "additional")
                            {{--*/ $add = "checked"; /*--}}
                          @endif
                          <div>
                          <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="{{$n->id}}">
                            <label for="noodle{{$i}}">{{$i}}</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle{{$i}}" class="louse-input" name="noodle{{$i}}" value="{{$n->description}}">
                            <label for="nprice{{$i}}">ราคา</label>
                            <input type="number" id="nprice{{$i}}" class="louse-input" name="nprice{{$i}}" size="4" min="0" max="1000" value="{{$n->price}}" required>
                            <label for="rnincrement{{$i}}">ราคาปกติ</label>
                            <input {{$inc}} type="radio" id="rnincrement{{$i}}" class="louse-input" name="rn{{$i}}" value="increment">
                            <label for="rnreplacement{{$i}}">ราคาพิเศษ</label>
                            <input {{$rep}} type="radio" id="rnreplacement{{$i}}" class="louse-input" name="rn{{$i}}" value="replacement">
                            <label for="rnadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                            <input {{$add}} type="radio" id="rnadditional{{$i}}" class="louse-input" name="rn{{$i}}" value="additional">
                            <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          {{--*/ $i++; $inc = $rep = $add = ""; /*--}}
                        @endforeach
                        @if($i <= 7)
                          @while($i <= 7)
                            <div>
                            <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="none">
                              <label for="noodle{{$i}}">{{$i}}</label>
                              <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle{{$i}}" class="louse-input" name="noodle{{$i}}" value="">
                              <label for="nprice{{$i}}">ราคา</label>
                              <input type="number" id="nprice{{$i}}" class="louse-input" name="nprice{{$i}}" size="4" min="0" max="1000" value="0" required>
                              <label for="rnincrement{{$i}}">ราคาปกติ</label>
                              <input checked="checked" type="radio" id="rnincrement{{$i}}" class="louse-input" name="rn{{$i}}" value="increment">
                              <label for="rnreplacement{{$i}}">ราคาพิเศษ</label>
                              <input type="radio" id="rnreplacement{{$i}}" class="louse-input" name="rn{{$i}}" value="replacement">
                              <label for="rnadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                              <input type="radio" id="rnadditional{{$i}}" class="louse-input" name="rn{{$i}}" value="additional">
                              <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="noodle">
                                <span class="glyphicon glyphicon-remove"></span>
                              </button>
                            </div>
                            {{--*/ $i++; /*--}}
                          @endwhile
                        @endif
                          <div>
                            <input type="submit" class="mu-send-btn" name="nsubmit" value="เรียบร้อย">
                          </div>
                        </div>
                      </form>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <form action="{{ url('admin/ingredient') }}" method="post" name="form_soup_ingredient">
                        <!-- div.wrap-form-ingredient>div*7>label[for="noodle$"]{$}+input#noodle$.louse-input[name="noodle$"]+label[for="nprice$"]{ราคา}+input#nprice$.louse-input[name="nprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rnincrement$"]{ราคาปกติ}+input#rnincrement$.louse-input[type="radio" name="rn$" checked]+label[for="rnreplacement$"]{ราคาพิเศษ}+input#rnreplacement$.louse-input[type="radio" name="rn$"]+label[for="rnadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rnadditional$.louse-input[type="radio" name="rn$"]+div>input.mu-send-btn[type="submit" name="nsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="soup" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                        {{--*/ $i=1; $inc = $rep = $add = ""; /*--}}
                        @foreach($soup as $n)
                          @if($n->traits == "increment")
                            {{--*/ $inc = "checked"; /*--}}
                          @elseif($n->traits == "replacement")
                            {{--*/ $rep = "checked"; /*--}}
                          @elseif($n->traits == "additional")
                            {{--*/ $add = "checked"; /*--}}
                          @endif
                          <div>
                          <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="{{$n->id}}">
                            <label for="soup{{$i}}">{{$i}}</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup{{$i}}" class="louse-input" name="soup{{$i}}" value="{{$n->description}}">
                            <label for="sprice{{$i}}">ราคา</label>
                            <input type="number" id="sprice{{$i}}" class="louse-input" name="sprice{{$i}}" size="4" min="0" max="1000" value="{{$n->price}}" required>
                            <label for="rsincrement{{$i}}">ราคาปกติ</label>
                            <input {{$inc}} type="radio" id="rsincrement{{$i}}" class="louse-input" name="rs{{$i}}" value="increment">
                            <label for="rsreplacement{{$i}}">ราคาพิเศษ</label>
                            <input {{$rep}} type="radio" id="rsreplacement{{$i}}" class="louse-input" name="rs{{$i}}" value="replacement">
                            <label for="rsadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                            <input {{$add}} type="radio" id="rsadditional{{$i}}" class="louse-input" name="rs{{$i}}" value="additional">
                            <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="soup">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          {{--*/ $i++; $inc = $rep = $add = ""; /*--}}
                        @endforeach
                        @if($i <= 7)
                          @while($i <= 7)
                            <div>
                            <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="none">
                              <label for="soup{{$i}}">{{$i}}</label>
                              <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup{{$i}}" class="louse-input" name="soup{{$i}}" value="">
                              <label for="sprice{{$i}}">ราคา</label>
                              <input type="number" id="sprice{{$i}}" class="louse-input" name="sprice{{$i}}" size="4" min="0" max="1000" value="0" required>
                              <label for="rsincrement{{$i}}">ราคาปกติ</label>
                              <input checked="checked" type="radio" id="rsincrement{{$i}}" class="louse-input" name="rs{{$i}}" value="increment">
                              <label for="rsreplacement{{$i}}">ราคาพิเศษ</label>
                              <input type="radio" id="rsreplacement{{$i}}" class="louse-input" name="rs{{$i}}" value="replacement">
                              <label for="rsadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                              <input type="radio" id="rsadditional{{$i}}" class="louse-input" name="rs{{$i}}" value="additional">
                              <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="soup">
                                <span class="glyphicon glyphicon-remove"></span>
                              </button>
                            </div>
                            {{--*/ $i++; /*--}}
                          @endwhile
                        @endif
                          <div>
                            <input type="submit" class="mu-send-btn" name="ssubmit" value="เรียบร้อย">
                          </div>
                        </div>
                      </form>
                      <hr>
                    </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <form action="{{ url('admin/ingredient') }}" method="post" name="form_topping_ingredient">
                        <!-- div.wrap-form-ingredient>div*7>label[for="noodle$"]{$}+input#noodle$.louse-input[name="noodle$"]+label[for="nprice$"]{ราคา}+input#nprice$.louse-input[name="nprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rnincrement$"]{ราคาปกติ}+input#rnincrement$.louse-input[type="radio" name="rn$" checked]+label[for="rnreplacement$"]{ราคาพิเศษ}+input#rnreplacement$.louse-input[type="radio" name="rn$"]+label[for="rnadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rnadditional$.louse-input[type="radio" name="rn$"]+div>input.mu-send-btn[type="submit" name="nsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="topping" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                        {{--*/ $i=1; $inc = $rep = $add = ""; /*--}}
                        @foreach($topping as $n)
                          @if($n->traits == "increment")
                            {{--*/ $inc = "checked"; /*--}}
                          @elseif($n->traits == "replacement")
                            {{--*/ $rep = "checked"; /*--}}
                          @elseif($n->traits == "additional")
                            {{--*/ $add = "checked"; /*--}}
                          @endif
                          <div>
                          <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="{{$n->id}}">
                            <label for="topping{{$i}}">{{$i}}</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping{{$i}}" class="louse-input" name="topping{{$i}}" value="{{$n->description}}">
                            <label for="tprice{{$i}}">ราคา</label>
                            <input type="number" id="tprice{{$i}}" class="louse-input" name="tprice{{$i}}" size="4" min="0" max="1000" value="{{$n->price}}" required>
                            <label for="rtincrement{{$i}}">ราคาปกติ</label>
                            <input {{$inc}} type="radio" id="rtincrement{{$i}}" class="louse-input" name="rt{{$i}}" value="increment">
                            <label for="rtreplacement{{$i}}">ราคาพิเศษ</label>
                            <input {{$rep}} type="radio" id="rtreplacement{{$i}}" class="louse-input" name="rt{{$i}}" value="replacement">
                            <label for="rtadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                            <input {{$add}} type="radio" id="rtadditional{{$i}}" class="louse-input" name="rt{{$i}}" value="additional">
                            <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="topping">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          {{--*/ $i++; $inc = $rep = $add = ""; /*--}}
                        @endforeach
                        @if($i <= 7)
                          @while($i <= 7)
                            <div>
                            <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="none">
                              <label for="topping{{$i}}">{{$i}}</label>
                              <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping{{$i}}" class="louse-input" name="topping{{$i}}" value="">
                              <label for="tprice{{$i}}">ราคา</label>
                              <input type="number" id="tprice{{$i}}" class="louse-input" name="tprice{{$i}}" size="4" min="0" max="1000" value="0" required>
                              <label for="rtincrement{{$i}}">ราคาปกติ</label>
                              <input checked="checked" type="radio" id="rtincrement{{$i}}" class="louse-input" name="rt{{$i}}" value="increment">
                              <label for="rtreplacement{{$i}}">ราคาพิเศษ</label>
                              <input type="radio" id="rtreplacement{{$i}}" class="louse-input" name="rt{{$i}}" value="replacement">
                              <label for="rtadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                              <input type="radio" id="rtadditional{{$i}}" class="louse-input" name="rt{{$i}}" value="additional">
                              <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="topping">
                                <span class="glyphicon glyphicon-remove"></span>
                              </button>
                            </div>
                            {{--*/ $i++; /*--}}
                          @endwhile
                        @endif
                          <div>
                            <input type="submit" class="mu-send-btn" name="tsubmit" value="เรียบร้อย">
                          </div>
                        </div>
                      </form>
                      <hr>
                    </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <form action="{{ url('admin/ingredient') }}" method="post" name="form_other_ingredient">
                        <!-- div.wrap-form-ingredient>div*7>label[for="noodle$"]{$}+input#noodle$.louse-input[name="noodle$"]+label[for="nprice$"]{ราคา}+input#nprice$.louse-input[name="nprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rnincrement$"]{ราคาปกติ}+input#rnincrement$.louse-input[type="radio" name="rn$" checked]+label[for="rnreplacement$"]{ราคาพิเศษ}+input#rnreplacement$.louse-input[type="radio" name="rn$"]+label[for="rnadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rnadditional$.louse-input[type="radio" name="rn$"]+div>input.mu-send-btn[type="submit" name="nsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="other" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                        {{--*/ $i=1; $inc = $rep = $add = ""; /*--}}
                        @foreach($other as $n)
                          @if($n->traits == "increment")
                            {{--*/ $inc = "checked"; /*--}}
                          @elseif($n->traits == "replacement")
                            {{--*/ $rep = "checked"; /*--}}
                          @elseif($n->traits == "additional")
                            {{--*/ $add = "checked"; /*--}}
                          @endif
                          <div>
                          <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="{{$n->id}}">
                            <label for="other{{$i}}">{{$i}}</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other{{$i}}" class="louse-input" name="other{{$i}}" value="{{$n->description}}">
                            <label for="oprice{{$i}}">ราคา</label>
                            <input type="number" id="oprice{{$i}}" class="louse-input" name="oprice{{$i}}" size="4" min="0" max="1000" value="{{$n->price}}" required>
                            <label for="roincrement{{$i}}">ราคาปกติ</label>
                            <input {{ $inc }} type="radio" id="roincrement{{$i}}" class="louse-input" name="ro{{$i}}" value="increment">
                            <label for="roreplacement{{$i}}">ราคาพิเศษ</label>
                            <input {{ $rep }} type="radio" id="roreplacement{{$i}}" class="louse-input" name="ro{{$i}}" value="replacement">
                            <label for="roadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                            <input {{ $add }} type="radio" id="roadditional{{$i}}" class="louse-input" name="ro{{$i}}" value="additional">
                            <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="other">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          {{--*/ $i++; $inc = $rep = $add = ""; /*--}}
                        @endforeach
                        @if($i <= 7)
                          @while($i <= 7)
                            <div>
                            <input type="hidden" id="rec_id{{$i}}" name="rec_id{{$i}}" value="none">
                              <label for="other{{$i}}">{{$i}}</label>
                              <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other{{$i}}" class="louse-input" name="other{{$i}}" value="">
                              <label for="oprice{{$i}}">ราคา</label>
                              <input type="number" id="oprice{{$i}}" class="louse-input" name="oprice{{$i}}" size="4" min="0" max="1000" value="0" required>
                              <label for="roincrement{{$i}}">ราคาปกติ</label>
                              <input checked="checked" type="radio" id="roincrement{{$i}}" class="louse-input" name="ro{{$i}}" value="increment">
                              <label for="roreplacement{{$i}}">ราคาพิเศษ</label>
                              <input type="radio" id="roreplacement{{$i}}" class="louse-input" name="ro{{$i}}" value="replacement">
                              <label for="roadditional{{$i}}">รวมราคานี้ด้วยเสมอ</label>
                              <input type="radio" id="roadditional{{$i}}" class="louse-input" name="ro{{$i}}" value="additional">
                              <button class="cancel-ingredient small-btn bg-red" data-code="{{$i}}" data-type="other">
                                <span class="glyphicon glyphicon-remove"></span>
                              </button>
                            </div>
                            {{--*/ $i++; /*--}}
                          @endwhile
                        @endif
                          <div>
                            <input type="submit" class="mu-send-btn" name="tsubmit" value="เรียบร้อย">
                          </div>
                        </div>
                      </form>
                      <hr>
                    </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<hr>  