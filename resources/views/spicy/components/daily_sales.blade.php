<section id="mu-daily-sales">
	    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-daily-sales-area">
            <!-- <div class="mu-title">
              <span class="mu-subtitle">All Orders</span>
              <h2>สรุปยอดขายรายวัน</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div> -->
            <div class="mu-daily-sales-content">
              <!-- <div class="row" id=".noodle" data-mustselect="true" data-type="select">
                <h3>เลือกเส้น</h3>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นเล็ก</div>
                <div class="noodle mu-readmore-btn" data-price="0">เส้นใหญ่</div>
                <div class="noodle mu-readmore-btn" data-price="0">หมี่ขาว</div>
                <div class="noodle mu-readmore-btn" data-price="0">บะหมี่</div>
                <div class="noodle mu-readmore-btn" data-price="0">วุ้นเส้น</div>
                <div class="noodle mu-readmore-btn" data-price="0">มาม่า</div>
              </div> -->

              <div class="row" id="row-daily-sales">
                <h3>สรุปยอดขายรายวัน</h3>
                <button class="mu-send-btn"><a href="admin/daily-sales" target="_blank">ดูยอดขายของวันนี้</a></button>
                <hr>
                <form action="{{url('daily-sales/bydate')}}" id="commentform">
                  <p class="comment-form-author">
                    <label for="date_report">โปรดเลือกวันที่<span class="required">*</span></label><br>
                    <input type="date" name="date_report" class="louse-input" value="" min="{{date('Y') . '-01-01'}}" required="required">
                    <input type="submit" name="submit" class="mu-send-btn" value="ดูรายงาน">
                  </p>   
                </form>
                <hr>
                <form action="{{url('daily-sales/between')}}" id="commentform">
                  <p class="comment-form-author">
                    <label for="date_report">โปรดเลือกช่วงวันที่<span class="required">*</span></label><br>
                    <input type="date" name="start_date" class="louse-input" value="" min="{{date('Y') . '-01-01'}}" required="required">
                    <input type="date" name="end_date" class="louse-input" value="" max="2050-01-01" required="required">
                    <input type="submit" name="submit" class="mu-send-btn" value="ดูรายงาน">
                  </p>   
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>