<?php
/**
 * Template Name: Калькулятор Зелена Карта
 */

?>
<?php get_header();?>
<?php
$url = site_url();
$url1 = get_template_directory_uri();
?>
<input type="hidden" id="url" data-url="<?php echo $url; ?>">
<input type="hidden" id="url1" data-url="<?php echo $url1; ?>">

  <section class="calculator_cuvilka calculator_green " ng-app="insuranceApp" ng-cloak  ng-controller="autoLabel">

        <div class="container">
            <div class="breadcrumbs">
                 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                <h1><?php the_title();?></h1>
            </div>
        </div>

       <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="state_1 flor">
                        <div class="desktop">
                            <div class="state_block">
                                <div class="state_item current-state">
                                    <div class="number">1</div>
                                    <span>Розрахунок</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">2</div>
                                    <span>Вибір</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">3</div>
                                    <span>Замовлення</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">4</div>
                                    <span>Готово</span>
                                </div>
                            </div>
                            <div class="auto_wrapper">
                                <div class="auto_tabs auto_tabs_green">
                                    <a href="#auto_tabs_anchor" class="link_scroll">
                                        <div class="auto_tabs_item_green current-auto-tab" ng-click="vehicle = 'c'; vehicleName = 'Легкове авто'">
                                            <div class="mask_click"></div>
                                            <div class="arrow block"></div>
                                            <div class="img_container">
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_car.svg"/>
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_car_orange.svg"/>
                                            </div>
                                            <span>Легкове авто</span>
                                        </div>
                                    </a>
                                    <a href="#auto_moto_anchor" class="link_scroll">
                                        <div class="auto_tabs_item_green" ng-click="vehicle = 'b'; vehicleName = 'Мотоцикл / моторолер'">
                                            <div class="mask_click"></div>
                                            <div class="arrow"></div>
                                            <div class="img_container">
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_motorcycle.svg"/>
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_motorcycle_orange.svg"/>
                                            </div>
                                            <span>Мотоцикл / моторолер</span>
                                        </div>
                                    </a>
                                    <a href="#auto_wagen_anchor" class="link_scroll">
                                        <div class="auto_tabs_item_green" ng-click="vehicle = 't'; vehicleName = 'Причіп / трейлер'">
                                            <div class="mask_click"></div>
                                            <div class="arrow"></div>
                                            <div class="img_container">
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_trailer.svg"/>
                                                <img src="<?php echo get_template_directory_uri();?>/images/svg/icons_trailer_orange.svg"/>
                                            </div>
                                            <span>Причіп / трейлер</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="info_wrapper">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Територія покриття</td>
                                        <td>
                                            <div class="radio_block gr_country">
                                                <input type="radio" checked name="gr_country" id="gr_country_f">
                                                <label class="button_more_label current-label" for="gr_country_f" ng-click="countries = ''; countriesName = 'Країни Європи'">Країни Європи</label>
                                                <input type="radio" name="gr_country" id="gr_country_s">
                                                <label class="button_more_label" for="gr_country_s" ng-click="countries = 'sng'; countriesName = 'Росія Білорусь Молдова' ">Росія Білорусь Молдова</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Період страхування
                                        </td>
                                        <td>
                                            <div class="radio_block gr_insurance">
                                              <select ng-options="g_date as g_date.name for g_date in greenDate track by g_date.value"
                                                ng-model="g_item" ng-change="greenDateVal(g_item)"></select>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="calc_n flor_next" ng-click="countGreen()">Розрахувати</div>
                    </div>
                    <div class="state_2 flor">
                        <div class="desktop">
                            <div class="state_block">
                                <div class="state_item">
                                    <div class="number">1</div>
                                    <span>Розрахунок</span>
                                </div>
                                <div class="state_item current-state">
                                    <div class="number">2</div>
                                    <span>Вибір</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">3</div>
                                    <span>Замовлення</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">4</div>
                                    <span>Готово</span>
                                </div>
                            </div>
                            <div class="order_wrapper">
                                <div class="header">
                                    <h4>ВАШЕ ЗАМОВЛЕННЯ</h4>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="row clearfix">
                                            <div class="col-lg-6">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td colspan="2">ПОЛІС ЗЕЛЕНА КАРТА / ГРІН КАРД</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Тип ТЗ</td>
                                                        <td>{{vehicleName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Територія покриття</td>
                                                        <td>{{countriesName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Період страхування</td>
                                                        <td>{{dateName}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <table id="changing_table">
                                                    <thead>
                                                    <tr>
                                                        <td>ПОЛІС ДЦВ</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Додатковий ліміт покриття</td>
                                                        <td id="additional_limit">100 000</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="calc_n calc_grey flor_prev">Змінити дані</div>
                                    </div>
                                </div>
                            </div>
                            <div class="insurance_wrapper ">
                                <div class="row clearfix">
                                    <div class="insurance_wrapper_green">
                                      <div class="col-md-3">
                                          <div class="insurance_item">
                                              <div class="insurance_item_wrapper">
                                                  <div class="top">
                                                      <div class="img_container">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/insurance_2.png" alt="">
                                                      </div>
                                                      <div class="description">
                                                          ПЗУ Україна
                                                          (Польща)
                                                      </div>
                                                  </div>
                                                  <div class="middle">
                                                      <h5>Бонус</h5>
                                                      <span>Картка дій при ДТП за кордоном</span>
                                                      <span>Безкоштовна Доставка
                                                          <!-- <div class="question_circle_wrapper">
                                                              <div class="question_circle">?</div>
                                                              <div class="answer_circle">евакуація з місця ДТП<br>
                                                                  доставка палива<br>
                                                                  заміна колеса<br>
                                                                  запуск двигуна
                                                              </div>
                                                          </div> -->
                                                      </span>
                                                  </div>
                                                  <div class="bottom">
                                                      <h5>ПРОПОЗИЦІЯ</h5>
                                                      <table>
                                                          <tbody>
                                                          <tr>
                                                              <td>ЦІНА</td>
                                                              <td class="oscpv">{{price}}<span class="arno">₴</span></td>
                                                          </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                              <div class="button_section">
                                                  <div class="calc_n flor_next" ng-click="insuranceName = 'ПЗУ Україна (Польща)'; franc=francPzu; checkoutResult=calculating(insertCash(pasteData.pzu),preFinalResultPZU); dcvEdit = insertCash(pasteData.pzu)">Придбати</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="insurance_item">
                                              <div class="insurance_item_wrapper">
                                                  <div class="top">
                                                      <div class="img_container">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/Kniazha-logo.png" alt="">
                                                      </div>
                                                      <div class="description">
                                                          Княжа
                                                          (Австрія)
                                                      </div>
                                                  </div>
                                                  <div class="middle">
                                                      <h5>Бонус</h5>
                                                      <span>Картка дій при ДТП за кордоном</span>
                                                      <span>Безкоштовна Доставка
                                                          <!-- <div class="question_circle_wrapper">
                                                              <div class="question_circle">?</div>
                                                              <div class="answer_circle">евакуація з місця ДТП<br>
                                                                  доставка палива<br>
                                                                  заміна колеса<br>
                                                                  запуск двигуна
                                                              </div>
                                                          </div> -->
                                                      </span>
                                                  </div>
                                                  <div class="bottom">
                                                      <h5>ПРОПОЗИЦІЯ</h5>
                                                      <table>
                                                          <tbody>
                                                          <tr>
                                                              <td>ЦІНА</td>
                                                              <td class="oscpv">{{price}}<span class="arno">₴</span></td>
                                                          </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                              <div class="button_section">
                                                  <div class="calc_n flor_next" ng-click="insuranceName = 'ПЗУ Україна (Польща)'; franc=francPzu; checkoutResult=calculating(insertCash(pasteData.pzu),preFinalResultPZU); dcvEdit = insertCash(pasteData.pzu)">Придбати</div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reminde_wrapper">
                              <div class="row clearfix">
                                <div class="col-md-12">
                                  <form role='form' name="remindForm" class="remindForm" id="remindForm" action="" method="post" novalidate>
                                    <div class="row clearfix">
                                      <div class="col-md-4">
                                        <div class="input_container" ng-class="{ 'has-error' : remindForm.email.$invalid && !remindForm.email.$pristine }">
                                           <span>
                                               Ваш Email<span class="redstar" style="color: red">*</span>
                                           </span>
                                           <input type="email" name="email" ng-model="remindFormM.email" value="" required>
                                            <p style="color:red;" ng-show="remindForm.email.$invalid && remindForm.email.$touched" class="help-block">Введіть Ваш Email</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="input_container" ng-class="{ 'has-error' : remindForm.phone.$invalid && !remindForm.phone.$pristine }">
                                           <span>
                                               Ваш телефон<span class="redstar" style="color: red">*</span>
                                           </span>
                                           <input type="text" name="phone" value="" ng-model="remindFormM.phone" required>
                                            <p style="color:red;" ng-show="remindForm.phone.$invalid && remindForm.phone.$touched" class="help-block">Введіть Ваш телефон</p>
                                        </div>

                                      </div>
                                      <div class="col-md-4">
                                        <div class="input_container" ng-class="{ 'has-error' : remindForm.date.$invalid && !remindForm.date.$pristine }">
                                           <span>
                                               Дата нагадування<span class="redstar" style="color: red">*</span>
                                           </span>
                                           <input id="datepicker" type="text" ng-model="remindFormM.date" name="date" value="" required>
                                            <p style="color:red;" ng-show="remindForm.date.$invalid && remindForm.date.$touched" class="help-block">Введіть дату</p>
                                        </div>
                                      </div>
                                    </div>
                                    <input type="text" hidden name="price" id="price" ng-model="remindFormM.price = price">
                                    <input type="text" hidden name="vehicle" id="vehicle" ng-model="remindFormM.price = vehicleName">
                                    <input type="text" hidden name="countries" id="countries" ng-model="remindFormM.price = countriesName">
                                    <input type="text" hidden name="date_range" id="date_range" ng-model="remindFormM.price = dateName">
                                    <button type="submit" ng-disabled="remindForm.$invalid" ng-class="{'disabled' : remindForm.$invalid}" class="calc_n" id="marked">Нагадати</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="state_3 flor">
                        <div class="desktop">
                            <div class="state_block">
                                <div class="state_item">
                                    <div class="number">1</div>
                                    <span>Розрахунок</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">2</div>
                                    <span>Вибір</span>
                                </div>
                                <div class="state_item current-state">
                                    <div class="number">3</div>
                                    <span>Замовлення</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">4</div>
                                    <span>Готово</span>
                                </div>
                            </div>
                            <div class="information_wrapper">
                                <div class="header">
                                    <h4>надати інформацію</h4>
                                    <span>Виберіть 1 з 2-х способів</span>
                                    <div class="info_tab_block info_tab_block_green">
                                        <div class="info_tab_item button_more current-tab">
                                            Завантажити фото документів
                                        </div>
                                        <!-- <div class="info_tab_item button_more">
                                            ЗАВАНТАЖИТИ ФОТО ПОЛІСУ
                                        </div> -->
                                        <div class="info_tab_item button_more">
                                            Заповнити анкету
                                        </div>
                                    </div>
                                </div>
                                <div class="download_block">
                                    <form role="form"  method="post" name="dragDropForm1" enctype="multipart/form-data" class="dragDropForm2"  ng-submit='validation(dragDropForm1)' novalidate>
                                        <div class="row clearfix">
                                            <input type="file" id="documents" hidden valid-file accept="image/*" name="documents[]" ng-model="preFinalForm.documents" ng-bind="dragDrop('documents')" ng-click="showHelper = true" multiple required>
                                            <label for="documents">
                                                <div class="col-md-5 drug_drop">
                                                    <div class="plus"></div>
                                                </div>
                                            </label>
                                            <div class="col-md-7">
                                               <span>Завантажте фото<br>
                                               документів</span>
                                                <span>Посвідчення водія (Страхувальника)</span>
                                                <span>Податковий номер (іпн)</span>
                                                <span>Тех паспорт ТЗ (1,2 ст.)</span>
                                                <span>Дата початку дії</span>
                                                <input type="text" id="datepickerDrag" ng-model="preFinalForm.dateDragForm" name="dateDragForm" required>
                                                <p style="color:red;" ng-show="dragDropForm1.dateDragForm.$invalid && !dragDropForm1.dateDragForm.$pristine" class="help-block">Вкажіть дату</p>
                                                <p style="color:red;" ng-show="dragDropForm1.documents.$invalid && !dragDropForm1.documents.$pristine" class="help-block">Завантажте фото документів</p>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-12 name_container">
                                                <span class="helper animated fadeInLeft" ng-show="showHelper">Для заміни файлу перезавантажте фото</span>
                                                <span class="file_name animated fadeInUp" ng-repeat="filename in fileArray">- {{filename}}</span>
                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" ng-disabled="dragDropForm1.$invalid" ng-class="{'disabled' : dragDropForm1.$invalid}" class="calc_n flor_next" ng-click="copyInput('documents')">Відправити</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="download_block">
                                    <form role="form" method="post" name="dragDropForm2" enctype="multipart/form-data" class="dragDropForm2" ng-submit='validation(dragDropForm2)' novalidate>
                                        <div class="row clearfix">
                                            <input type="file" id="polis" hidden valid-file name="polis[]" accept="image/*" ng-model="preFinalForm.polis"  ng-bind="dragDrop('polis')" ng-click="showHelper = true" multiple required>
                                            <label for="polis">
                                                <div class="col-md-5 drug_drop">
                                                    <div class="plus"></div>
                                                </div>
                                            </label>
                                                <div class="col-md-7">
                                                    <span>
                                                        Завантажте попередній<br>
                                                    поліс ОСЦПВ
                                                    </span>
                                                    <p style="color:red;" ng-show="dragDropForm2.polis.$invalid && !dragDropForm2.polis.$pristine" class="help-block">Завантажте фото полісу</p>
                                                </div>
                                                <div class="clearfix"></div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-12 name_container">
                                                <span class="helper animated fadeInLeft" ng-show="showHelper">Для заміни файлу перезавантажте фото</span>
                                                <span class="file_name" ng-repeat="filename in fileArray">- {{filename}}</span>
                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" ng-disabled="dragDropForm2.$invalid" ng-class="{'disabled' : dragDropForm2.$invalid}" class="calc_n flor_next" ng-click="copyInput('polis')">Відправити</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                                <div class="download_block">
                                    <div class="row clearfix">
                                        <div class="col-md-9">
                                            <form role='form' class="preForm" name="preForm" ng-submit='validation(preForm)' novalidate>
                                                <div class="state_3_item">
                                                        <h4>Страхувальник</h4>
                                                        <div class="row clearfix">
                                                            <div class="col-md-6">
                                                                <div class="input_container" ng-class="{ 'has-error' : preForm.surname.$invalid && !preForm.surname.$pristine }">
                                                                   <span>
                                                                       Прізвище<span class="redstar" style="color: red">*</span>
                                                                   </span>
                                                                    <input type="text" name="surname" ng-model="preFinalForm.surnameJQ" ng-blur="FinalForm.surname = preFinalForm.surnameJQ" id="surname" required>

                                                                    <p style="color:red;" ng-show="preForm.surname.$invalid && preForm.surname.$touched" class="help-block">Введіть ваше Прізвище</p>
                                                                </div>
                                                                <div class="input_container" ng-class="{ 'has-error' : preForm.name.$invalid && !preForm.name.$pristine }">
                                                                   <span>
                                                                       Ім’я<span class="redstar" style="color: red">*</span>
                                                                   </span>
                                                                    <input type="text" id="name" ng-model="preFinalForm.nameJQ" ng-blur="FinalForm.name = preFinalForm.nameJQ" name="name" required>
                                                                    <p style="color:red;" ng-show="preForm.name.$invalid && preForm.name.$touched" class="help-block">Введіть ваше Ім’я</p>
                                                                </div>
                                                                <div class="input_container" ng-class="{ 'has-error' : preForm.bat.$invalid && !preForm.bat.$pristine }">
                                                                   <span>
                                                                       По Батькові<span class="redstar" style="color: red">*</span>
                                                                   </span>
                                                                    <input type="text" name="bat" ng-model="preFinalForm.bat" required >
                                                                    <p style="color:red;" ng-show="preForm.bat.$invalid && preForm.bat.$touched" class="help-block">Заповніть це поле</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input_container" ng-class="{ 'has-error' : preForm.date.$invalid && !preForm.date.$pristine}">
                                                                   <span>
                                                                       Дата народження<span class="redstar" style="color: red">*</span>
                                                                   </span>
                                                                    <input type="text" name="date" id="mask_date" ng-model="preFinalForm.date" required>
                                                                    <p style="color:red;" ng-show="preForm.date.$invalid && preForm.date.$touched" class="help-block">Не вірний формат дати</p>
                                                                </div>
                                                                <div class="input_container" ng-class="{ 'has-error' : preForm.ipn.$error.pattern && !preForm.ipn.$pristine}">
                                                                   <span>
                                                                       ІПН<span class="redstar" style="color: red">*</span>
                                                                   </span>
                                                                    <input type="text" required name="ipn" id="mask_ipn" ng-model="preFinalForm.ipn" required ng-pattern="ipnReg">
                                                                    <p style="color:red;" ng-show="preForm.ipn.$invalid && preForm.ipn.$touched" class="help-block">Не вірний формат ІПН</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="state_3_item">
                                                    <h4>Документ</h4>
                                                    <div class="row clearfix">
                                                        <div class="col-md-6">
                                                            <div class="input_container">
                                                               <span>
                                                                  Тип документа<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <div class="pseudo_select">
                                                                    <div class="mirror" id="mirrort">Паспорт</div>
                                                                    <div class="option_wrapper">
                                                                        <div class="option current-option">Паспорт</div>
                                                                        <div class="option">Посвідчення водія</div>
                                                                        <div class="option reserved">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input_container">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-4" ng-class="{ 'has-error' : preForm.series.$invalid && !preForm.series.$pristine}">
                                                                            <span>
                                                                                Серія<span class="redstar" style="color: red">*</span>
                                                                            </span>
                                                                        <input type="text" name="series" ng-model="preFinalForm.series" required>
                                                                    </div>
                                                                    <div class="col-md-8" ng-class="{ 'has-error' : preForm.docNumber.$invalid && !preForm.docNumber.$pristine}">
                                                                           <span>
                                                                               Номер<span class="redstar" style="color: red">*</span>
                                                                           </span>
                                                                        <input type="text" required name="docNumber" ng-model="preFinalForm.docNumber" required>
                                                                        <p style="color:red;" ng-show="preForm.docNumber.$invalid && preForm.docNumber.$touched" class="help-block">Не вірний формат Номера</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.whome.$invalid && !preForm.whome.$pristine }">
                                                               <span>
                                                                   Ким виданий<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" required name="whome" ng-model="preFinalForm.whome">
                                                                <p style="color:red;" ng-show="preForm.whome.$invalid && preForm.whome.$touched" class="help-block">Заповніть це поле</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.docDate.$invalid && !preForm.docDate.$pristine}">
                                                               <span>
                                                                   Дата видачі<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" id="mask_date2" name="docDate" ng-model="preFinalForm.docDate" required>
                                                                <p style="color:red;" ng-show="preForm.docDate.$invalid && preForm.docDate.$touched" class="help-block">Не вірний формат дати</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="state_3_item">
                                                    <h4>Адреса прописки</h4>
                                                    <div class="row clearfix">
                                                        <div class="col-md-6">
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.city.$invalid && !preForm.city.$pristine}">
                                                               <span>
                                                                   Місто<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="city" ng-model="preFinalForm.city" required>
                                                                <p style="color:red;" ng-show="preForm.city.$invalid && preForm.city.$touched" class="help-block">Вкажіть місто</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.street.$invalid && !preForm.street.$pristine}">
                                                               <span>
                                                                   Вулиця<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="street" ng-model="preFinalForm.street" required>
                                                                <p style="color:red;" ng-show="preForm.street.$invalid && preForm.street.$touched" class="help-block">Вкажіть вулицю</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="top">
                                                                <div class="nothing"></div>
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="input_container small" ng-class="{ 'has-error' : preForm.house.$invalid && !preForm.house.$pristine}">
                                                                    <span>Будинок<span class="redstar" style="color: red">*</span></span>
                                                                    <input type="text" name="house" ng-model="preFinalForm.house" required>
                                                                    <p style="color:red;" ng-show="preForm.house.$invalid && preForm.house.$touched" class="help-block"></p>
                                                                </div>
                                                                <div class="input_container small">
                                                                    <span>Квартира</span>
                                                                    <input type="text" name="flat" ng-model="preFinalForm.flat">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="state_3_item">
                                                    <h4>Транспортний засіб</h4>
                                                    <div class="row clearfix">
                                                        <div class="col-md-6">
                                                            <div class="input_container" id="forAutoFilter" ng-class="{ 'has-error' :  auto.$invalid && !auto.$pristine}">
                                                               <span>
                                                                   Марка ТЗ<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" ng-model="auto" name="autoFilter" ng-blur="filterShow = !filterShow" ng-focus="filterShow = !filterShow" ng-change="checkMark(auto,arrayConvert)" required>
                                                                <div class="auto_filter" ng-show="filterShow">
                                                                    <ul class="selectForPlugin">
                                                                        <li ng-repeat="mark in arrayConvert | filter:auto" ng-mousedown="clickAuto(mark); checkMark(mark,arrayConvert)">{{mark}}</li>
                                                                    </ul>
                                                                </div>
                                                                <p style="color:red;" ng-show="wrongMarkCheck">Оберіть марку</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.model.$invalid && !preForm.model.$pristine}">
                                                               <span>
                                                                   Модель ТЗ<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="model" ng-model="preFinalForm.model" required>
                                                                <p style="color:red;" ng-show="preForm.model.$invalid && preForm.model.$touched" class="help-block">Вкажіть модель ТЗ</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.yearTz.$invalid && !preForm.yearTz.$pristine}">
                                                               <span>
                                                                   Рік випуску ТЗ<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="yearTz" id="mask_yearTz" ng-model="preFinalForm.yearTz" required>
                                                                <p style="color:red;" ng-show="preForm.yearTz.$invalid && preForm.yearTz.$touched" class="help-block">Не вірний формат дати</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.vin.$invalid && !preForm.vin.$pristine}">
                                                               <span>
                                                                   VIN код<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="vin" id="mask_vin" ng-model="preFinalForm.vin" required>
                                                                <p style="color:red;" ng-show="preForm.vin.$invalid && preForm.vin.$touched" class="help-block">Введіть VIN код</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.registNumber.$invalid && preForm.registNumber.$touched}">
                                                               <span>
                                                                   Реєстраційний номер ТЗ<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="registNumber" ng-model="preFinalForm.registNumber" required>
                                                                <p style="color:red;" ng-show="preForm.registNumber.$invalid && preForm.registNumber.$touched" class="help-block">Введіть реєстраційний номер ТЗ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="state_3_item">
                                                    <h4>Дата початку дії</h4>
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <div class="input_container" ng-class="{ 'has-error' : preForm.dateDI.$invalid && !preForm.dateDI.$pristine}">
                                                               <span>
                                                                   Вкажіть дату<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="dateDI" id="datepickerDI" ng-model="preFinalForm.dateDI" required>
                                                                <p style="color:red;" ng-show="preForm.dateDI.$invalid && preForm.dateDI.$touched" class="help-block">Не вірний формат дати</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-md-12">
                                                        <p class="star_helper"><span class="redstar" style="color: red">*</span> - обов’язкові поля</p>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-md-12">
                                                        <button type="submit" ng-disabled="preForm.$invalid" ng-class="{'disabled' : preForm.$invalid}" class="calc_n flor_next" id="marked">Відправити</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="state_3 flor">
                        <div class="desktop">
                            <div class="state_block">
                                <div class="state_item">
                                    <div class="number">1</div>
                                    <span>Розрахунок</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">2</div>
                                    <span>Вибір</span>
                                </div>
                                <div class="state_item current-state">
                                    <div class="number">3</div>
                                    <span>Замовлення</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">4</div>
                                    <span>Готово</span>
                                </div>
                            </div>
                            <form role='form' class="finalForm" enctype="multipart/form-data" id="finalForm" name="finalForm" ng-submit='sendMail(preFinalForm, finalForm)' novalidate   method="post">
                                <div class="checkout_wrapper">
                                    <div class="header">
                                        <h4>ДОСТАВКА ТА ОПЛАТА</h4>
                                    </div>
                                    <div class="forLastForm">

                                        <input type="text" hidden id="dcvEdit" name="dcvEdit" ng-model="preFinalForm.dcvEdit = dcvEdit">
                                        <input type="text" hidden id="forSurname" name="surnameEdit">
                                        <input type="text" hidden id="forName" name="nameEdit">
                                        <input type="text" name="bat" hidden ng-model="preFinalForm.bat">
                                        <input type="text" name="date" hidden ng-model="preFinalForm.date">
                                        <input type="text" name="ipn" hidden ng-model="preFinalForm.ipn">
                                        <input type="text" hidden name="jQueryInputDoc" id="jQueryInputDoc" ng-model="preFinalForm.mirror">
                                        <input type="text" hidden name="series" ng-model="preFinalForm.series">
                                        <input type="text" hidden name="docNumber" ng-model="preFinalForm.docNumber">
                                        <input type="text" hidden name="whome" ng-model="preFinalForm.whome">
                                        <input type="text" hidden name="docDate" ng-model="preFinalForm.docDate">
                                        <input type="text" hidden name="city" ng-model="preFinalForm.city">
                                        <input type="text" hidden name="street" ng-model="preFinalForm.street">
                                        <input type="text" hidden name="house" ng-model="preFinalForm.house">
                                        <input type="text" hidden name="flat" ng-model="preFinalForm.flat">
                                        <input type="text" hidden ng-model="preFinalForm.auto = auto" name="autoFilter">
                                        <input type="text" hidden name="model" ng-model="preFinalForm.model">
                                        <input type="text" hidden name="yearTz" ng-model="preFinalForm.yearTz">
                                        <input type="text" hidden name="vin" ng-model="preFinalForm.vin">
                                        <input type="text" hidden name="registNumber" ng-model="preFinalForm.registNumber">
                                       <!--  <input type="file" hidden name="polis" ng-model="preFinalForm.polis">
                                        <input type="file" hidden name="documents" ng-model="preFinalForm.documents"> -->
                                        <input type="text" hidden name="insuranceName" ng-model="preFinalForm.insuranceName = insuranceName">
                                        <input type="text" hidden name="engine" ng-model="preFinalForm.engine = engine">
                                        <input type="text" hidden name="DTP" ng-model="preFinalForm.DTP = DTP">
                                        <input type="text" hidden name="franc" ng-model="preFinalForm.franc = franc">
                                        <input type="text" hidden name="dgo" ng-model="preFinalForm.dgo = dgo">
                                        <input type="text" hidden name="cityName" ng-model="preFinalForm.cityName = cityName">
                                        <input type="text" hidden name="taxiQuestion" ng-model="preFinalForm.taxiQuestion = taxiQuestion">
                                        <input type="text" hidden name="autoCategory" ng-model="preFinalForm.autoCategory = autoCategory">
                                        <input type="text" hidden name="autoYear" ng-model="preFinalForm.autoYear = autoYear">
                                        <input type="text" hidden name="pilgaText" ng-model="preFinalForm.pilgaText = pilgaText">
                                        <input type="text" hidden name="finalResult" ng-model="preFinalForm.finalResult = checkoutResult">
                                        <input type="text" hidden name="textWish" ng-model="preFinalForm.preFinalForm.textWish = preFinalForm.textWish">

                                    </div>
                                    <div class="checkout_block">
                                        <div class="state_3_item">
                                            <div class="row clearfix">
                                                <div class="col-md-9">
                                                    <h3>Замовник поліса</h3>
                                                    <div class="row clearfix">
                                                        <div class="col-md-6">
                                                            <div class="input_container" ng-class="{ 'has-error' : finalForm.surname.$invalid && !finalForm.surname.$pristine}">
                                                               <span>
                                                                   Прізвище<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" id="toSurname" valid-input name="surname" ng-model="FinalForm.surname" required>
                                                                <p style="color:red;" ng-show="finalForm.surname.$invalid && finalForm.surname.$touched" class="help-block">Введіть ваше Прізвище</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : finalForm.name.$invalid && !finalForm.name.$pristine}">
                                                               <span>
                                                                   Ім’я<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" id="toName" valid-input name="name" ng-model="FinalForm.name" required>
                                                                <p style="color:red;" ng-show="finalForm.name.$invalid && finalForm.name.$touched" class="help-block">Введіть ваше Ім’я</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input_container" ng-class="{ 'has-error' : finalForm.tel.$invalid && !finalForm.tel.$pristine}">
                                                               <span>
                                                                   Ваш телефон<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="text" name="tel" id="mask_number" placeholder="+38" ng-model="preFinalForm.tel" required>
                                                                <p style="color:red;" ng-show="finalForm.tel.$invalid && finalForm.tel.$touched" class="help-block">Введіть ваш Телефон</p>
                                                            </div>
                                                            <div class="input_container" ng-class="{ 'has-error' : finalForm.mail.$error.pattern && finalForm.mail.$touched}">
                                                               <span>
                                                                   Ваш e-mail<span class="redstar" style="color: red">*</span>
                                                               </span>
                                                                <input type="email" name="mail" ng-model="preFinalForm.mail" required>
                                                                <p style="color:red;" ng-show="finalForm.mail.$invalid && finalForm.mail.$touched" class="help-block">Введіть вашу Пошту</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <h3>ДОСТАВКА <span>(безкоштовно)</span></h3>
                                                            <div class="delivery_tabs">
                                                                <div class="delivery_item button_more current-tab" ng-click="requiredToggle = true; requiredToggle2 = true">
                                                                    Самовивіз
                                                                </div>
                                                                <div class="delivery_item button_more" ng-click="requiredToggle = false; requiredToggle2 = true">
                                                                    Кур'єром
                                                                </div>
                                                                <div class="delivery_item button_more" ng-click="requiredToggle = true; requiredToggle2 = false">
                                                                    Нова Пошта
                                                                </div>
                                                            </div>
                                                            <div class="delivery_block">
                                                                <div class="delivery_tab_wrapper">
                                                                    <div class="top">
                                                                        <div class="top_item">
                                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="top_item">
                                                                            <p>м. Київ, вул. Старокиївська, 10г<br>
                                                                                БЦ Вектор, корпус А, офіс Cambridge</p>
                                                                            <span>біля метро «Політехнічний інститут»</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="middle">
                                                                        <h3>ОПЛАТА</h3>
                                                                        <span>Готівкою при отриманні полісу</span>
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <h3>Додаткове побажання</h3>
                                                                        <textarea ng-model="preFinalForm.textWish" id="textWish"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="delivery_tab_wrapper">
                                                                    <div class="top">
                                                                        <span>Кур’єрська доставка по м. Київ</span>
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6">
                                                                                <div class="input_container">
                                                                                    <span>Вулиця</span>
                                                                                    <input type="text" name="deliveryStreet" ng-model="preFinalForm.deliveryStreet" ng-required="requiredToggle == false">
                                                                                    <p style="color:red;" ng-show="finalForm.deliveryStreet.$invalid && !finalForm.deliveryStreet.$pristine" class="help-block">Введіть вашу Вулицю</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input_container small">
                                                                                    <span>Будинок</span>
                                                                                    <input type="text" name="deliveryHouse" ng-model="preFinalForm.deliveryHouse" ng-required="requiredToggle == false">
<!--                                                                                    <p style="color:red;" ng-show="finalForm.deliveryHouse.$invalid && !finalForm.deliveryHouse.$pristine" class="help-block">Введіть ваш Будтнок</p>-->
                                                                                </div>
                                                                                <div class="input_container small_long">
                                                                                    <span>Квартира / офіс</span>
                                                                                    <input type="text"  name="deliveryFlat" ng-model="preFinalForm.deliveryFlat">
<!--                                                                                    <p style="color:red;" ng-show="finalForm.deliveryFlat.$invalid && !finalForm.deliveryFlat.$pristine" class="help-block">Введіть вашу Квартиру / офіс</p>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="middle">
                                                                        <h3>ОПЛАТА</h3>
                                                                        <span>Готівкою при отриманні полісу</span>
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <h3>Додаткове побажання</h3>
                                                                        <textarea></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="delivery_tab_wrapper">
                                                                    <div class="top">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-6">
                                                                                <div class="input_container">
                                                                                    <span>Місто</span>
                                                                                    <input type="text" name="deliveryCity" ng-model="preFinalForm.deliveryCity" ng-required="requiredToggle2 == false">
                                                                                    <p style="color:red;" ng-show="finalForm.deliveryCity.$invalid && !finalForm.deliveryCity.$pristine" class="help-block">Введіть ваше Місто</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input_container small_long">
                                                                                    <span>Номер відділення<br>Нової Пошти</span>
                                                                                    <input type="text" name="poshta" ng-model="preFinalForm.poshta" ng-required="requiredToggle2 == false" ng-pattern="poshtaReg">
<!--                                                                                    <p style="color:red;" ng-show="finalForm.poshta.$error.pattern && !finalForm.poshta.$pristine" class="help-block">Введіть ваш Будтнок</p>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="middle">
                                                                        <h3>ОПЛАТА</h3>
                                                                        <span>Готівкою при отриманні полісу</span>
                                                                        <span>вартість оплати 2% від вартості страховки + 20 <span class="arno">₴</span></span>
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <h3>Додаткове побажання</h3>
                                                                        <textarea></textarea>
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
                                <div class="result_wrapper">
                                    <div class="header">
                                        <h4>Ваше замовлення</h4>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">

                                            <div class="tab1 tabs">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>СК</h5>
                                                                <span>{{insuranceName}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Страховка</h5>
                                                                <span>ОСАГО, франшиза {{franc}} <span class="arno">₴</span> {{dgo}} <span class="arno">₴</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Категорія ТЗ</h5>
                                                                <span>{{autoCategory}}</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab2 tabs">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>Тип ТЗ</h5>
                                                                <span>{{engine}}<sup ng-show="sup">3</sup></span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Місце реєстрації ТЗ</h5>
                                                                <span>{{cityName}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Рік випуску авто</h5>
                                                                <span>{{autoYear}}</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab3 tabs">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5>Без ДТП</h5>
                                                                <span>{{DTP}}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Авто використ. як Таксі</h5>
                                                                <span>{{taxiQuestion}}</span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Пільга</h5>
                                                                <span>{{pilgaText}}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <!--<table>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <h5>СК</h5>
                                                        <span>{{insuranceName}}</span></td>
                                                    <td>
                                                        <h5>Тип ТЗ</h5>
                                                        <span>{{engine}}<sup ng-show="sup">3</sup></span></td>
                                                    <td>
                                                        <h5>Без ДТП</h5>
                                                        <span>{{DTP}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>Страховка</h5>
                                                        <span>ОСАГО, франшиза {{franc}} <span class="arno">₴</span> {{dgo}} <span class="arno">₴</span></span></td>
                                                    <td>
                                                        <h5>Місце реєстрації ТЗ</h5>
                                                        <span>{{cityName}}</span></td>
                                                    <td>
                                                        <h5>Авто використ. як Таксі</h5>
                                                        <span>{{taxiQuestion}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>Категорія ТЗ</h5>
                                                        <span>{{autoCategory}}</span></td>
                                                    <td>
                                                        <h5>Рік випуску авто</h5>
                                                        <span>{{autoYear}}</span></td>
                                                    <td>
                                                        <h5>Пільга</h5>
                                                        <span>{{pilgaText}}</span></td>
                                                </tr>
                                                </tbody>
                                            </table>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="result_price_wrapper">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="result_price">
                                                Загальна вартість <span>{{checkoutResult}}</span> <span class="arno"><span class="arno">₴</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="final_wrapper">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="top">
                                                <input type="checkbox" id="finan_submit" name="final" ng-click="checkBox = !checkBox" required>
                                                <label for="finan_submit" id="pseudo_input_label" class="pseudo_input_active">
                                                    <div class="pseudo_input">
                                                    </div>
                                                    <span>Надані мною дані є вірними. Даю згоду на
                                                    обробку моїх персональних даних</span>
                                                </label>
                                            </div>
                                            <div class="bottom"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--<input class="calc_n flor_next" type="submit" value="Замовити"/>-->
                                <button type="submit" id="sendmail" class="calc_n flor_next adaptive" ng-disabled="finalForm.$invalid || checkBox == false" ng-class="{'disabled' : finalForm.$invalid || checkBox == false}">ЗАМОВИТИ</button>
                                <div class="calc_n calc_grey return adaptive">Повернутись до розрахунку</div>
                            </form>

                        </div>
                    </div>
                    <div class="state_4 flor">
                        <div class="desktop">
                            <div class="state_block">
                                <div class="state_item">
                                    <div class="number">1</div>
                                    <span>Розрахунок</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">2</div>
                                    <span>Вибір</span>
                                </div>
                                <div class="state_item">
                                    <div class="number">3</div>
                                    <span>Замовлення</span>
                                </div>
                                <div class="state_item current-state">
                                    <div class="number">4</div>
                                    <span>Готово</span>
                                </div>
                            </div>
                            <div class="thanks_wrapper">
                                <h2>Дякуємо,<br>
                                    Ваше замовлення прийнято.</h2>
                                <h3>Ближчим часом з Вами зв’яжуться співробітники Яші Шульмана. </h3>
                                <div class="calc_n return">Придбати ще один поліс</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<script>
jQuery("#remindForm").submit(function(event){
    var form = document.getElementById("remindForm");

  //disable the default form submission
  event.preventDefault();

  //grab all form data
  var formData = new FormData(jQuery(this)[0]);

  jQuery.ajax({
    url: '<?php echo $url1;?>/sendmail_remind.php',
      data: new FormData(form),// the formData function is available in almost all new browsers.
      type:"post",
      contentType:false,
      processData:false,
      cache:false,
      dataType:"json", // Change this according to your response from the server.
  error:function(err){
        console.error(err);
        console.log("Error.");
  },
  success:function(data){
       console.log(data);
       console.log("Success.");
  },
  complete:function(data){
   console.log("Request finished.");
   console.log(data);

  }
  });

  return false;
});
   //Program a custom submit function for the form
jQuery("#finalForm").submit(function(event){
    var form = document.getElementById("finalForm");

  //disable the default form submission
  event.preventDefault();

  //grab all form data
  var formData = new FormData(jQuery(this)[0]);

  jQuery.ajax({
    url: '<?php echo $url1;?>/sendmail.php',
      data: new FormData(form),// the formData function is available in almost all new browsers.
      type:"post",
      contentType:false,
      processData:false,
      cache:false,
      dataType:"json", // Change this according to your response from the server.
  error:function(err){
        console.error(err);
  },
  success:function(data){
       console.log(data);
  },
  complete:function(data){
   console.log("Request finished.");
   console.log(data);

  }
  });

  return false;
});
</script>
<?php get_footer();?>
