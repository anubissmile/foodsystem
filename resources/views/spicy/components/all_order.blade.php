<section id="mu-all-order">
	    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-all-order-area">
            <div class="mu-title">
              <span class="mu-subtitle">All Orders</span>
              <h2>รายการสั่งอาหาร</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-all-order-content">
              <!-- <div class="row" id=".noodle" data-mustselect="true" data-type="select">
                <h3>เลือกเส้น</h3>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นเล็ก</div>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นใหญ่</div>
                <div class="noodle mu-readmore-btn" data-price="0">หมี่ขาว</div>
                <div class="noodle mu-readmore-btn" data-price="0">บะหมี่</div>
                <div class="noodle mu-readmore-btn" data-price="0">วุ้นเส้น</div>
                <div class="noodle mu-readmore-btn" data-price="0">มาม่า</div>
              </div> -->

              <div class="row" id="row-all-orders">
                <h3>รายการสั่งอาหารทั้งหมด</h3>
                <table class="normal-table tb-all-orders">
                  <thead class="head-all-orders">
                    <tr>
                      <td id="td-list" 
                        data-count="{{count($orders)}}">{{count($orders)}} รายการ</td>
                      <td id="td-amount">จำนวน (ชาม)</td>
                      <td id="td-complete" class="head-active">เสิร์ฟ</td>
                      <td id="td-cancel" class="head-active">ยกเลิก</td>
                    </tr>
                  </thead>
                  <tbody class="body-all-orders">
                  @foreach($orders as $order)
                    <tr class="{{$order->code}}">
                      <td>{{$order->list}}</td>
                      <td>{{$order->amount}}</td>
                      <td>
                        <button class="order-action small-btn bg-green" 
                          data-code="{{$order->code}}"
                          data-action="complete">
                          <span class="glyphicon glyphicon-ok"></span>
                        </button>
                      </td>
                      <td>
                        <button class="order-action small-btn bg-red" 
                          data-code="{{$order->code}}"
                          data-action="abort">
                          <span class="glyphicon glyphicon-remove"></span>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" class="csrf" id="csrf">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>