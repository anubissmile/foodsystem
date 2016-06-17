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
                      <form action="">
                        <!-- div.wrap-form-ingredient>div*7>label[for="noodle$"]{$}+input#noodle$.louse-input[name="noodle$"]+label[for="nprice$"]{ราคา}+input#nprice$.louse-input[name="nprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rnincrement$"]{ราคาปกติ}+input#rnincrement$.louse-input[type="radio" name="rn$" checked]+label[for="rnreplacement$"]{ราคาพิเศษ}+input#rnreplacement$.louse-input[type="radio" name="rn$"]+label[for="rnadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rnadditional$.louse-input[type="radio" name="rn$"]+div>input.mu-send-btn[type="submit" name="nsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="noodle" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                          <div>
                          <input type="hidden" id="rec_id1" name="rec_id1" value="">
                            <label for="noodle1">1</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle1" class="louse-input" name="noodle1">
                            <label for="nprice1">ราคา</label>
                            <input type="number" id="nprice1" class="louse-input" name="nprice1" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement1">ราคาปกติ</label>
                            <input type="radio" id="rnincrement1" class="louse-input" name="rn1" checked="">
                            <label for="rnreplacement1">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement1" class="louse-input" name="rn1">
                            <label for="rnadditional1">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional1" class="louse-input" name="rn1">
                            <button class="cancel-ingredient small-btn bg-red" data-code="1" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id2" name="rec_id2" value="">
                            <label for="noodle2">2</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle2" class="louse-input" name="noodle2">
                            <label for="nprice2">ราคา</label>
                            <input type="number" id="nprice2" class="louse-input" name="nprice2" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement2">ราคาปกติ</label>
                            <input type="radio" id="rnincrement2" class="louse-input" name="rn2" checked="">
                            <label for="rnreplacement2">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement2" class="louse-input" name="rn2">
                            <label for="rnadditional2">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional2" class="louse-input" name="rn2">
                            <button class="cancel-ingredient small-btn bg-red" data-code="2" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id2" name="rec_id2" value="">
                            <label for="noodle3">3</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle3" class="louse-input" name="noodle3">
                            <label for="nprice3">ราคา</label>
                            <input type="number" id="nprice3" class="louse-input" name="nprice3" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement3">ราคาปกติ</label>
                            <input type="radio" id="rnincrement3" class="louse-input" name="rn3" checked="">
                            <label for="rnreplacement3">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement3" class="louse-input" name="rn3">
                            <label for="rnadditional3">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional3" class="louse-input" name="rn3">
                            <button class="cancel-ingredient small-btn bg-red" data-code="3" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id4" name="rec_id4" value="">
                            <label for="noodle4">4</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle4" class="louse-input" name="noodle4">
                            <label for="nprice4">ราคา</label>
                            <input type="number" id="nprice4" class="louse-input" name="nprice4" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement4">ราคาปกติ</label>
                            <input type="radio" id="rnincrement4" class="louse-input" name="rn4" checked="">
                            <label for="rnreplacement4">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement4" class="louse-input" name="rn4">
                            <label for="rnadditional4">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional4" class="louse-input" name="rn4">
                            <button class="cancel-ingredient small-btn bg-red" data-code="4" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id5" name="rec_id5" value="">
                            <label for="noodle5">5</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle5" class="louse-input" name="noodle5">
                            <label for="nprice5">ราคา</label>
                            <input type="number" id="nprice5" class="louse-input" name="nprice5" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement5">ราคาปกติ</label>
                            <input type="radio" id="rnincrement5" class="louse-input" name="rn5" checked="">
                            <label for="rnreplacement5">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement5" class="louse-input" name="rn5">
                            <label for="rnadditional5">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional5" class="louse-input" name="rn5">
                            <button class="cancel-ingredient small-btn bg-red" data-code="5" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id6" name="rec_id6" value="">
                            <label for="noodle6">6</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle6" class="louse-input" name="noodle6">
                            <label for="nprice6">ราคา</label>
                            <input type="number" id="nprice6" class="louse-input" name="nprice6" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement6">ราคาปกติ</label>
                            <input type="radio" id="rnincrement6" class="louse-input" name="rn6" checked="">
                            <label for="rnreplacement6">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement6" class="louse-input" name="rn6">
                            <label for="rnadditional6">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional6" class="louse-input" name="rn6">
                            <button class="cancel-ingredient small-btn bg-red" data-code="6" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id7" name="rec_id7" value="">
                            <label for="noodle7">7</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="noodle7" class="louse-input" name="noodle7">
                            <label for="nprice7">ราคา</label>
                            <input type="number" id="nprice7" class="louse-input" name="nprice7" size="4" min="0" max="1000" value="0" required>
                            <label for="rnincrement7">ราคาปกติ</label>
                            <input type="radio" id="rnincrement7" class="louse-input" name="rn7" checked="">
                            <label for="rnreplacement7">ราคาพิเศษ</label>
                            <input type="radio" id="rnreplacement7" class="louse-input" name="rn7">
                            <label for="rnadditional7">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rnadditional7" class="louse-input" name="rn7">
                            <button class="cancel-ingredient small-btn bg-red" data-code="7" data-type="noodle">
                              <span class="glyphicon glyphicon-remove"></span>
                            </button>
                          </div>
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
                      <form action="">
                        <!-- div.wrap-form-ingredient>div*7>label[for="soup$"]{$}+input#soup$.louse-input[name="soup$"]+label[for="sprice$"]{ราคา}+input#sprice$.louse-input[name="sprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rsincrement$"]{ราคาปกติ}+input#rsincrement$.louse-input[type="radio" name="rs$" checked]+label[for="rsreplacement$"]{ราคาพิเศษ}+input#rsreplacement$.louse-input[type="radio" name="rs$"]+label[for="rsadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rsadditional$.louse-input[type="radio" name="rs$"]+div>input.mu-send-btn[type="submit" name="ssubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="soup" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                          <div>
                          <input type="hidden" id="rec_id1" name="rec_id1" value="">
                            <label for="soup1">1</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup1" class="louse-input" name="soup1">
                            <label for="sprice1">ราคา</label>
                            <input type="number" id="sprice1" class="louse-input" name="sprice1" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement1">ราคาปกติ</label>
                            <input type="radio" id="rsincrement1" class="louse-input" name="rs1" checked="">
                            <label for="rsreplacement1">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement1" class="louse-input" name="rs1">
                            <label for="rsadditional1">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional1" class="louse-input" name="rs1">
                            <button class="cancel-ingredient small-btn bg-red" data-code="1" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id2" name="rec_id2" value="">
                            <label for="soup2">2</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup2" class="louse-input" name="soup2">
                            <label for="sprice2">ราคา</label>
                            <input type="number" id="sprice2" class="louse-input" name="sprice2" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement2">ราคาปกติ</label>
                            <input type="radio" id="rsincrement2" class="louse-input" name="rs2" checked="">
                            <label for="rsreplacement2">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement2" class="louse-input" name="rs2">
                            <label for="rsadditional2">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional2" class="louse-input" name="rs2">
                            <button class="cancel-ingredient small-btn bg-red" data-code="2" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id3" name="rec_id3" value="">
                            <label for="soup3">3</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup3" class="louse-input" name="soup3">
                            <label for="sprice3">ราคา</label>
                            <input type="number" id="sprice3" class="louse-input" name="sprice3" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement3">ราคาปกติ</label>
                            <input type="radio" id="rsincrement3" class="louse-input" name="rs3" checked="">
                            <label for="rsreplacement3">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement3" class="louse-input" name="rs3">
                            <label for="rsadditional3">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional3" class="louse-input" name="rs3">
                            <button class="cancel-ingredient small-btn bg-red" data-code="3" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id4" name="rec_id1" value="">
                            <label for="soup4">4</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup4" class="louse-input" name="soup4">
                            <label for="sprice4">ราคา</label>
                            <input type="number" id="sprice4" class="louse-input" name="sprice4" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement4">ราคาปกติ</label>
                            <input type="radio" id="rsincrement4" class="louse-input" name="rs4" checked="">
                            <label for="rsreplacement4">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement4" class="louse-input" name="rs4">
                            <label for="rsadditional4">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional4" class="louse-input" name="rs4">
                            <button class="cancel-ingredient small-btn bg-red" data-code="4" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id5" name="rec_id5" value="">
                            <label for="soup5">5</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup5" class="louse-input" name="soup5">
                            <label for="sprice5">ราคา</label>
                            <input type="number" id="sprice5" class="louse-input" name="sprice5" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement5">ราคาปกติ</label>
                            <input type="radio" id="rsincrement5" class="louse-input" name="rs5" checked="">
                            <label for="rsreplacement5">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement5" class="louse-input" name="rs5">
                            <label for="rsadditional5">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional5" class="louse-input" name="rs5">
                            <button class="cancel-ingredient small-btn bg-red" data-code="5" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id6" name="rec_id6" value="">
                            <label for="soup6">6</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup6" class="louse-input" name="soup6">
                            <label for="sprice6">ราคา</label>
                            <input type="number" id="sprice6" class="louse-input" name="sprice6" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement6">ราคาปกติ</label>
                            <input type="radio" id="rsincrement6" class="louse-input" name="rs6" checked="">
                            <label for="rsreplacement6">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement6" class="louse-input" name="rs6">
                            <label for="rsadditional6">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional6" class="louse-input" name="rs6">
                            <button class="cancel-ingredient small-btn bg-red" data-code="6" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id7" name="rec_id7" value="">
                            <label for="soup7">7</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="soup7" class="louse-input" name="soup7">
                            <label for="sprice7">ราคา</label>
                            <input type="number" id="sprice7" class="louse-input" name="sprice7" size="4" min="0" max="1000" value="0" required>
                            <label for="rsincrement7">ราคาปกติ</label>
                            <input type="radio" id="rsincrement7" class="louse-input" name="rs7" checked="">
                            <label for="rsreplacement7">ราคาพิเศษ</label>
                            <input type="radio" id="rsreplacement7" class="louse-input" name="rs7">
                            <label for="rsadditional7">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rsadditional7" class="louse-input" name="rs7">
                            <button class="cancel-ingredient small-btn bg-red" data-code="7" data-type="soup"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
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
                      <form action="">
                        <!-- div.wrap-form-ingredient>div*7>label[for="topping$"]{$}+input#topping$.louse-input[name="topping$"]+label[for="tprice$"]{ราคา}+input#tprice$.louse-input[name="tprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="rtincrement$"]{ราคาปกติ}+input#rtincrement$.louse-input[type="radio" name="rt$" checked]+label[for="rtreplacement$"]{ราคาพิเศษ}+input#rtreplacement$.louse-input[type="radio" name="rt$"]+label[for="rtadditional$"]{รวมราคานี้ด้วยเสมอ}+input#rtadditional$.louse-input[type="radio" name="rt$"]+div>input.mu-send-btn[type="submit" name="tsubmit" value="แก้ไขรายการ"] -->
                        <input type="hidden" value="topping" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                          <div>
                          <input type="hidden" id="rec_id1" name="rec_id1" value="">
                            <label for="topping1">1</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping1" class="louse-input" name="topping1">
                            <label for="tprice1">ราคา</label>
                            <input type="number" id="tprice1" class="louse-input" name="tprice1" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement1">ราคาปกติ</label>
                            <input type="radio" id="rtincrement1" class="louse-input" name="rt1" checked="">
                            <label for="rtreplacement1">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement1" class="louse-input" name="rt1">
                            <label for="rtadditional1">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional1" class="louse-input" name="rt1">
                            <button class="cancel-ingredient small-btn bg-red" data-code="1" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id2" name="rec_id2" value="">
                            <label for="topping2">2</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping2" class="louse-input" name="topping2">
                            <label for="tprice2">ราคา</label>
                            <input type="number" id="tprice2" class="louse-input" name="tprice2" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement2">ราคาปกติ</label>
                            <input type="radio" id="rtincrement2" class="louse-input" name="rt2" checked="">
                            <label for="rtreplacement2">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement2" class="louse-input" name="rt2">
                            <label for="rtadditional2">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional2" class="louse-input" name="rt2">
                            <button class="cancel-ingredient small-btn bg-red" data-code="2" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id3" name="rec_id3" value="">
                            <label for="topping3">3</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping3" class="louse-input" name="topping3">
                            <label for="tprice3">ราคา</label>
                            <input type="number" id="tprice3" class="louse-input" name="tprice3" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement3">ราคาปกติ</label>
                            <input type="radio" id="rtincrement3" class="louse-input" name="rt3" checked="">
                            <label for="rtreplacement3">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement3" class="louse-input" name="rt3">
                            <label for="rtadditional3">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional3" class="louse-input" name="rt3">
                            <button class="cancel-ingredient small-btn bg-red" data-code="3" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id4" name="rec_id4" value="">
                            <label for="topping4">4</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping4" class="louse-input" name="topping4">
                            <label for="tprice4">ราคา</label>
                            <input type="number" id="tprice4" class="louse-input" name="tprice4" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement4">ราคาปกติ</label>
                            <input type="radio" id="rtincrement4" class="louse-input" name="rt4" checked="">
                            <label for="rtreplacement4">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement4" class="louse-input" name="rt4">
                            <label for="rtadditional4">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional4" class="louse-input" name="rt4">
                            <button class="cancel-ingredient small-btn bg-red" data-code="4" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id5" name="rec_id5" value="">
                            <label for="topping5">5</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping5" class="louse-input" name="topping5">
                            <label for="tprice5">ราคา</label>
                            <input type="number" id="tprice5" class="louse-input" name="tprice5" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement5">ราคาปกติ</label>
                            <input type="radio" id="rtincrement5" class="louse-input" name="rt5" checked="">
                            <label for="rtreplacement5">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement5" class="louse-input" name="rt5">
                            <label for="rtadditional5">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional5" class="louse-input" name="rt5">
                            <button class="cancel-ingredient small-btn bg-red" data-code="5" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id6" name="rec_id6" value="">
                            <label for="topping6">6</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping6" class="louse-input" name="topping6">
                            <label for="tprice6">ราคา</label>
                            <input type="number" id="tprice6" class="louse-input" name="tprice6" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement6">ราคาปกติ</label>
                            <input type="radio" id="rtincrement6" class="louse-input" name="rt6" checked="">
                            <label for="rtreplacement6">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement6" class="louse-input" name="rt6">
                            <label for="rtadditional6">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional6" class="louse-input" name="rt6">
                            <button class="cancel-ingredient small-btn bg-red" data-code="6" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id7" name="rec_id7" value="">
                            <label for="topping7">7</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="topping7" class="louse-input" name="topping7">
                            <label for="tprice7">ราคา</label>
                            <input type="number" id="tprice7" class="louse-input" name="tprice7" size="4" min="0" max="1000" value="0" required>
                            <label for="rtincrement7">ราคาปกติ</label>
                            <input type="radio" id="rtincrement7" class="louse-input" name="rt7" checked="">
                            <label for="rtreplacement7">ราคาพิเศษ</label>
                            <input type="radio" id="rtreplacement7" class="louse-input" name="rt7">
                            <label for="rtadditional7">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="rtadditional7" class="louse-input" name="rt7">
                            <button class="cancel-ingredient small-btn bg-red" data-code="7" data-type="topping"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
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
                      <form action="">
                        <!-- div.wrap-form-ingredient>div*7>label[for="other$"]{$}+input#other$.louse-input[name="other$"]+label[for="oprice$"]{ราคา}+input#oprice$.louse-input[name="oprice$" size="4" type="number" min="0" max="1000" value="0"]+label[for="roincrement$"]{ราคาปกติ}+input#roincrement$.louse-input[type="radio" name="ro$" checked]+label[for="roreplacement$"]{ราคาพิเศษ}+input#roreplacement$.louse-input[type="radio" name="ro$"]+label[for="roadditional$"]{รวมราคานี้ด้วยเสมอ}+input#roadditional$.louse-input[type="radio" name="ro$"]+div>input.mu-send-btn[type="submit" name="osubmit" value="แก้ไขรายการ"] -->

                        <input type="hidden" value="other" name="type">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="wrap-form-ingredient">
                          <div>
                          <input type="hidden" id="rec_id1" name="rec_id1" value="">
                            <label for="other1">1</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other1" class="louse-input" name="other1">
                            <label for="oprice1">ราคา</label>
                            <input type="number" id="oprice1" class="louse-input" name="oprice1" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement1">ราคาปกติ</label>
                            <input type="radio" id="roincrement1" class="louse-input" name="ro1" checked="">
                            <label for="roreplacement1">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement1" class="louse-input" name="ro1">
                            <label for="roadditional1">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional1" class="louse-input" name="ro1">
                            <button class="cancel-ingredient small-btn bg-red" data-code="1" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id2" name="rec_id2" value="">
                            <label for="other2">2</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other2" class="louse-input" name="other2">
                            <label for="oprice2">ราคา</label>
                            <input type="number" id="oprice2" class="louse-input" name="oprice2" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement2">ราคาปกติ</label>
                            <input type="radio" id="roincrement2" class="louse-input" name="ro2" checked="">
                            <label for="roreplacement2">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement2" class="louse-input" name="ro2">
                            <label for="roadditional2">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional2" class="louse-input" name="ro2">
                            <button class="cancel-ingredient small-btn bg-red" data-code="2" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id3" name="rec_id3" value="">
                            <label for="other3">3</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other3" class="louse-input" name="other3">
                            <label for="oprice3">ราคา</label>
                            <input type="number" id="oprice3" class="louse-input" name="oprice3" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement3">ราคาปกติ</label>
                            <input type="radio" id="roincrement3" class="louse-input" name="ro3" checked="">
                            <label for="roreplacement3">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement3" class="louse-input" name="ro3">
                            <label for="roadditional3">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional3" class="louse-input" name="ro3">
                            <button class="cancel-ingredient small-btn bg-red" data-code="3" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id4" name="rec_id4" value="">
                            <label for="other4">4</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other4" class="louse-input" name="other4">
                            <label for="oprice4">ราคา</label>
                            <input type="number" id="oprice4" class="louse-input" name="oprice4" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement4">ราคาปกติ</label>
                            <input type="radio" id="roincrement4" class="louse-input" name="ro4" checked="">
                            <label for="roreplacement4">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement4" class="louse-input" name="ro4">
                            <label for="roadditional4">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional4" class="louse-input" name="ro4">
                            <button class="cancel-ingredient small-btn bg-red" data-code="4" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id5" name="rec_id5" value="">
                            <label for="other5">5</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other5" class="louse-input" name="other5">
                            <label for="oprice5">ราคา</label>
                            <input type="number" id="oprice5" class="louse-input" name="oprice5" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement5">ราคาปกติ</label>
                            <input type="radio" id="roincrement5" class="louse-input" name="ro5" checked="">
                            <label for="roreplacement5">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement5" class="louse-input" name="ro5">
                            <label for="roadditional5">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional5" class="louse-input" name="ro5">
                            <button class="cancel-ingredient small-btn bg-red" data-code="5" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id6" name="rec_id6" value="">
                            <label for="other6">6</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other6" class="louse-input" name="other6">
                            <label for="oprice6">ราคา</label>
                            <input type="number" id="oprice6" class="louse-input" name="oprice6" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement6">ราคาปกติ</label>
                            <input type="radio" id="roincrement6" class="louse-input" name="ro6" checked="">
                            <label for="roreplacement6">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement6" class="louse-input" name="ro6">
                            <label for="roadditional6">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional6" class="louse-input" name="ro6">
                            <button class="cancel-ingredient small-btn bg-red" data-code="6" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                          <input type="hidden" id="rec_id7" name="rec_id7" value="">
                            <label for="other7">7</label>
                            <input type="text" placeholder="เพิ่มส่วนประกอบอาหาร" id="other7" class="louse-input" name="other7">
                            <label for="oprice7">ราคา</label>
                            <input type="number" id="oprice7" class="louse-input" name="oprice7" size="4" min="0" max="1000" value="0" required>
                            <label for="roincrement7">ราคาปกติ</label>
                            <input type="radio" id="roincrement7" class="louse-input" name="ro7" checked="">
                            <label for="roreplacement7">ราคาพิเศษ</label>
                            <input type="radio" id="roreplacement7" class="louse-input" name="ro7">
                            <label for="roadditional7">รวมราคานี้ด้วยเสมอ</label>
                            <input type="radio" id="roadditional7" class="louse-input" name="ro7">
                            <button class="cancel-ingredient small-btn bg-red" data-code="7" data-type="other"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                          <div>
                            <input type="submit" class="mu-send-btn" name="osubmit" value="เรียบร้อย">
                          </div>
                        </div>
                      </form>
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