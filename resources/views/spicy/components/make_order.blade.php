<section id="mu-make-order">
	    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-make-order-area">
            <div class="mu-title">
              <span class="mu-subtitle">Make Order</span>
              <h2>สั่งอาหาร</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-make-order-content">
              <div class="row" id=".noodle" data-mustselect="true" data-type="select">
                <h3>เลือกเส้น</h3>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นเล็ก</div>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นใหญ่</div>
                <div class="noodle mu-readmore-btn" data-price="0">หมี่ขาว</div>
                <div class="noodle mu-readmore-btn" data-price="0">บะหมี่</div>
                <div class="noodle mu-readmore-btn" data-price="0">วุ้นเส้น</div>
                <div class="noodle mu-readmore-btn" data-price="0">มาม่า</div>
              </div>
              <div class="row" id=".soup" data-mustselect="true" data-type="select">
                <h3>เลือกน้ำซุป</h3>
                <div class="soup mu-readmore-btn" data-price="30">ต้มยำน้ำข้น (30฿)</div>
                <div class="soup mu-readmore-btn" data-price="30">ต้มยำน้ำใส (30฿)</div>
                <div class="soup mu-readmore-btn" data-price="20">น้ำใส (20฿)</div>
                <div class="soup mu-readmore-btn" data-price="20">เย็นตาโฟ (20฿)</div>
                <div class="soup mu-readmore-btn" data-price="30">ต้มยำแห้ง (30฿)</div>
                <div class="soup mu-readmore-btn" data-price="20">แห้ง (20฿)</div>
              </div>
              <div class="row" id=".topping" data-mustselect="true" data-type="choice">
                <h3>เลือกท็อปปิง (เลือกได้หลายรายการ)</h3>
                <div class="topping mu-readmore-btn" data-price="0">ลูกชิ้นไก่</div>
                <div class="topping mu-readmore-btn" data-price="0">ลูกชิ้นปลา</div>
                <div class="topping mu-readmore-btn" data-price="0">เกี๊ยว</div>
              </div>
              <div class="row" id=".other" data-mustselect="false" data-type="choice">
                <h3>คุณสมบัติอื่นๆ (เลือกได้หลายรายการ)</h3>
                <div class="other mu-readmore-btn" data-price="0">ไม่ใส่ผัก</div>
                <div class="other mu-readmore-btn" data-price="5">เพิ่มไข่ (5฿)</div>
              </div>
              <div class="row" id=".extra" data-mustselect="false" data-type="select">
                <h3>พิเศษ</h3>
                <div class="extra mu-readmore-btn" data-price="5">พิเศษ (5฿)</div>
                <div class="extra mu-readmore-btn" data-price="30">ยกทัพ (30฿)</div>
              </div>
              <div class="row" id=".amount" data-mustselect="false" data-type="hit">
                <h3>จำนวน</h3>
                <button id="plus" class="amount mu-readmore-btn" data-price="0">+</button>
                <button id="minus" class="amount mu-readmore-btn" data-price="0">-</button>
                <div id="amount" class="amount normal-btn bg-brown">1 ชาม</div>
              </div>
              <div class="row" id=".action" data-mustselect="false" data-type="none">
                <h3>รายการอาหารที่สั่ง</h3>
                <h4 id="lb-result"></h4>
              </div>
              <div class="row" id=".price" data-mustselect="false" data-type="none">
                <h3>ราคาต่อชาม</h3>
                <div id="price" class="price normal-btn bg-brown">1 บาท</div>
              </div>
              <div class="row" id=".sum" data-mustselect="false" data-type="none">
                <h3>ราคาทั้งสิ้น</h3>
                <div id="sum" class="sum normal-btn bg-brown">1 บาท</div>
              </div>
              <div class="row" id=".action" data-mustselect="false" data-type="none">
                <h3>ส่งรายการ</h3>
                <button id="order" class="action normal-btn bg-green">ORDER</button>
                <button id="cancel" class="action normal-btn bg-red">CANCEL</button>
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>