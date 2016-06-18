<section id="mu-make-order">
	    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-make-order-area">
            <!-- <div class="mu-title">
              <span class="mu-subtitle">Make Order</span>
              <h2>สั่งอาหาร</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div> -->
            <div class="mu-make-order-content">
              <div class="row" id=".noodle" data-describe="เลือกเส้น" data-mustselect="true" data-type="select">
                <!-- <h3>เลือกเส้น</h3> -->
                @foreach($noodle as $n)
                  <div class="noodle mu-readmore-btn" data-method="{{ $n->traits }}" data-price="{{ $n->price }}">{{ $n->description }}</div>
                @endforeach
                @if(count($noodle) < 7)
                  @for($i=1; $i<=(7-count($noodle)); $i++)
                    <div class="other mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                  @endfor
                @endif
              </div>
              <div class="row" id=".soup" data-describe="เลือกน้ำซุป" data-mustselect="true" data-type="select">
                <!-- <h3>เลือกน้ำซุป</h3> -->
                @foreach($soup as $s)
                  <div class="soup mu-readmore-btn" data-method="{{ $s->traits }}" data-price="{{ $s->price }}">{{ $s->description }}</div>
                @endforeach
                @if(count($soup) < 7)
                  @for($i=1; $i<=(7-count($soup)); $i++)
                    <div class="other mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                  @endfor
                @endif
              </div>
              <div class="row" id=".topping" data-describe="เลือกท็อปปิง (เลือกได้หลายรายการ)" data-mustselect="false" data-type="choice">
                <!-- <h3>เลือกท็อปปิง (เลือกได้หลายรายการ)</h3> -->
                @foreach($topping as $t)
                  <div class="topping mu-readmore-btn" data-method="{{ $t->traits }}" data-price="{{ $t->price }}">{{ $t->description }}</div>
                @endforeach
                @if(count($topping) < 7)
                  @for($i=1; $i<=(7-count($topping)); $i++)
                    <div class="other mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                  @endfor
                @endif
              </div>
              <div class="row" id=".other" data-describe="คุณสมบัติอื่นๆ (เลือกได้หลายรายการ)" data-mustselect="false" data-type="choice">
                <!-- <h3>คุณสมบัติอื่นๆ (เลือกได้หลายรายการ)</h3> -->
                @foreach($other as $o)
                  <div class="other mu-readmore-btn" data-method="{{ $o->traits }}" data-price="{{ $o->price }}">{{ $o->description }}</div>
                @endforeach
                @if(count($other) < 7)
                  @for($i=1; $i<=(7-count($other)); $i++)
                    <div class="other mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                  @endfor
                @endif
              </div>
              <!-- <div class="row" id=".extra" data-describe="พิเศษ" data-mustselect="false" data-type="select">
                <h3>พิเศษ</h3>
                <div class="extra mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                <div class="extra mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                <div class="extra mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
                <div class="extra mu-readmore-btn-disable" data-method="increment" data-price="0"></div>
              </div> -->
             <!--  <div class="row" id=".amount" data-describe="จำนวน" data-mustselect="false" data-type="hit">
                <h3>จำนวน</h3>
                <button id="plus" class="amount mu-readmore-btn" data-method="increment" data-price="0">+</button>
                <button id="minus" class="amount mu-readmore-btn" data-method="increment" data-price="0">-</button>
                <div id="amount" class="amount normal-btn bg-brown">1 ชาม</div>
                <div id="price" class="price normal-btn bg-brown">1 บาท</div>
                <div id="amount" class="amount normal-btn bg-brown"></div>
                <div id="amount" class="amount normal-btn bg-brown"></div>
                <div id="amount" class="amount normal-btn bg-brown"></div>
              </div> -->
              <div class="row" id=".action" data-describe="รายการอาหารที่สั่ง" data-mustselect="false" data-type="none">
                <!-- <h3>รายการอาหารที่สั่ง</h3> -->
                <div id="lb-result" class="sum normal-list-name-btn bg-brown"></div>
                <div id="sum" class="sum normal-btn bg-brown">1 บาท</div>
                <button id="order" class="action normal-btn bg-green">สั่ง</button>
                <button id="cancel" class="action normal-btn bg-red">ยกเลิก</button>
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>