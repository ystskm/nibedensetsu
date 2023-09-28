<?php include ('header.php'); ?>
<!-- main -->
<section class="mv"></section>
<main>
    <div class="bg">
        <div class="bg-img"></div>
        <section id="message" class="message">
            <div class="message-inner">
                <div class="message-heading">
                    <p class="message-heading__sub"><img src="img/message.png" alt=""></p>
                    <h2 class="message-heading__main">あいさつ</h2>
                </div>
                <p class="message-text">弊社は、平成元年（1989年）の会社設立以来、30年以上にわたり、イベント・展示会場における電気設備工事業を行ってまいりました。長年培った知識と経験と高い技術力により、お客様のニーズにお応えし高い評価と信頼を頂いております。今後も『お客様の未来への社運をかけたプロジェクト』に応えるべく、丁寧で正確な仕事を社員一丸となって日々精進して行く所存でございます。</p>
            </div>
        </section>
        <section id="company" class="company">
            <div class="company-inner">
                <div class="company-box">
                    <div class="company-heading">
                        <p class="company-heading__sub"><img src="img/company.png" alt=""></p>
                        <h2 class="company-heading__main">会社案内</h2>
                    </div>
                    <table class="company-table">
                        <tr class="company-table__row">
                            <th class="company-table__th">社名</th>
                            <td class="company-table__td">二部電設株式会社</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">創立年月</th>
                            <td class="company-table__td">1989年7月</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">代表者</th>
                            <td class="company-table__td">二部通子</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">資本金</th>
                            <td class="company-table__td">1000万円</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">従業員数</th>
                            <td class="company-table__td">5人</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">住所</th>
                            <td class="company-table__td">〒154-0003<br>
                            東京都世田谷区野沢4丁目5−21</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">電話番号</th>
                            <td class="company-table__td">TEL:03-3795-8780</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">FAX番号</th>
                            <td class="company-table__td">FAX:03-3412-7230</td>
                        </tr>
                        <tr class="company-table__row">
                            <th class="company-table__th">許可票</th>
                            <td class="company-table__td">建設業（般-3）第82999号<br>
                            登録電気工事業　第024516号</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section id="business" class="business">
            <div class="business-inner">
                <div class="business-img">
                    <img class="business-img-img" src="img/business-img.png" alt="">
                </div>
                <div class="business-box">
                    <div class="business-box-wrap">
                        <div class="business-heading">
                            <p class="business-heading__sub"><img src="img/business.png" alt=""></p>
                            <h2 class="business-heading__main">事業内容</h2>
                        </div>
                        <p class="business-text">首都圏の大規模イベント会場や展示会場での<br class="pc">電気設備や照明器具の取り付けおよび撤去作業</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="recruit" class="recruit">
        <div class="recruit-inner">
            <div class="recruit-box">
                <div class="recruit-heading">
                    <p class="recruit-heading__sub"><img src="img/recruit.png" alt=""></p>
                    <h2 class="recruit-heading__main">採用情報</h2>
                </div>
                <p class="recruit-text">二部電設では、素直で真面目に仕事に<br>
                取り込んで下さる方を募集しています。</p>
                <div class="recruit-btn">
                    <a class="recruit-btn-link" href="https://pw0peizx6.jbplt.jp/" target="_blank">詳しくはこちら</a>
                </div>
            </div>
            <div class="recruit-img"><img class="recruit-img-img" src="img/recruit-img.png" alt=""></div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="contact-inner">
            <div class="contact-heading">
                <p class="contact-heading__sub"><img src="img/contact.png" alt=""></p>
                <h2 class="contact-heading__main">お問い合わせ</h2>
            </div>
            <div class="contact-form">
                <form method="post" action="mail.php">
                    <div class="contact-form-table">
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">お名前</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <input type="text" name="お名前" placeholder="" required="">
                            </div>
                        </div>
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">フリガナ</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <input type="text" name="フリガナ" placeholder="" required="">
                            </div>
                        </div>
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">住所</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <input type="text" name="住所" placeholder="" required="">
                            </div>
                        </div>
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">電話番号</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <input type="tel" name="電話番号" placeholder="" required="">
                            </div>
                        </div>
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">メールアドレス</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <input class="contact-form-box-item__input-mail" type="email" name="メールアドレス" placeholder="" required="">
                            </div>
                        </div>
                        <div class="contact-form-table-item">
                            <div class="contact-form-table-item__heading">
                                <p class="contact-form-table-item__heading-title">お問い合わせ内容</p>
                                <span class="contact-form-table-item__heading-required">必須</span>
                            </div>
                            <div class="contact-form-table-item__body">
                                <textarea name="お問い合わせ内容"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-policy">
                        <p class="contact-form-policy-text">下記の「個人情報の取扱いについて」を必ずお読みください。<br>
                        内容をご確認のうえ同意していただいた場合、<span>「同意する」</span>のチェックボックスにチェックを入れて下さい。</p>
                        <div class="contact-form-policy-box">
                            <div class="contact-form-policy-box-inner">
                                <div class="contact-form-policy-box__item">
                                    <p class="contact-form-policy-box__item-title">個人情報取扱規約</p>
                                    <p class="contact-form-policy-box__item-text">1.取得する情報およびその取得方法<br>
                                    当社が取得するユーザー情報は、その取得方法に応じて、以下のとおりとなります。<br><br>
                                    （１）ユーザーから直接取得する情報<br>
                                    当社は、本サービスの利用にあたって、ユーザーから以下の情報を取得します。<br>
                                    ・氏名<br>
                                    ・メールアドレス<br>
                                    ・電話番号<br>
                                    ・その他当社がアプリまたはウェブサイトにおいて取得すると定めた情報<br>
                                    （２）技術情報の取得<br>
                                    ユーザーが本サービスにアクセスする際に、当社は以下の技術情報を取得します。<br>
                                    ・端末識別子<br>
                                    ・IPアドレス<br>
                                    ・Cookie<br>
                                    ・その他広告識別子<br>
                                    （３）ユーザーの個別同意に基づいて取得する情報<br>
                                    当社はユーザーから個別の同意を得られた場合、以下の情報を取得します。<br>
                                    ・自由記入欄にユーザーによって記載された情報</p>
                                    <p class="contact-form-policy-box__item-text">2.利用目的<br>
                                    当社は、取得したユーザー情報を以下に定める目的のために使用します。<br>
                                    ・業務<br>
                                    ・サービスの提供<br>
                                    ・本人確認、ユーザー認証<br>
                                    ・本サービスに関する規約変更など重要な通知の実施<br>
                                    ・本サービスに関するご案内・お問い合わせへの対応<br>
                                    ・その他当社が提供する各種サービスにおいて定める目的</p>
                                    <p class="contact-form-policy-box__item-text">3.個人情報の第三者提供<br>
                                    当社は、ユーザー情報のうち個人情報に関して、あらかじめユーザーの同意を得ることなく、第三者に提供しません。但し、次に定める場合にはこの限りではなく、ユーザー情報を第三者に提供することがあります。<br>
                                    （１）外部サービスとの連携または、外部サービスを利用した認証にあたり、当該外部サービス運営会社にユーザー情報を提供する場合<br>
                                    （２）国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して、当社が協力する必要があり、<br>
                                    かつユーザーからの同意取得が当該事務の遂行に支障を及ぼすおそれがある場合<br>
                                    （３）その他法令で認められる場合</p>
                                    <p class="contact-form-policy-box__item-text">4.個人情報の開示<br>
                                    当社は、ユーザーから、個人情報保護法の定めに基づき個人情報の開示を求められたときは、ユーザーご本人からのご請求であることを確認のうえで、ユーザーに対し、遅滞なく開示を行います。但し、個人情報保護法その他の法令により、当社が開示の義務を負わない場合は、この限りではありません。</p>
                                    <p class="contact-form-policy-box__item-text">5.個人情報の訂正および利用の停止等<br>
                                    （１）当社は、ユーザーから、個人情報の内容が事実ではなく、訂正・追加・削除（以下「訂正等」という）を求められたときは、<br>
                                    ユーザーご本人からのご請求であることを確認のうえ遅滞なく調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、<br>
                                    その旨をユーザーに通知します。<br>
                                    （２）当社は、ユーザーから、以下の各号の理由に基づき個人情報の利用の停止または消去（以下「利用の停止等」という）を求められたときは、<br>ユーザーご本人からのご請求であることを確認のうえ遅滞なく調査を行い、その結果に基づき、個人情報の利用の停止等を行い、<br>
                                    その旨をユーザーに通知します。<br>
                                    ①あらかじめ公表された利用目的の範囲を超えて個人情報が取扱われているという理由<br>
                                    ②偽りその他の手段により個人情報が取得されたものであるという理由<br>
                                    （３）個人情報保護法その他の法令により、当社が訂正等または利用の停止等の義務を負わない場合、本条１項、２項の定めは適用されません。</p>
                                    <p class="contact-form-policy-box__item-text">6.お問い合わせ<br>
                                    当社のプライバシーポリシーに関する、ご意見、ご質問、苦情の申出その他ユーザー情報の取扱いに関するお問い合わせは、<br>
                                    以下の窓口にご連絡ください。</p>
                                    <p class="contact-form-policy-box__item-text">個人情報保護方針に関するお問い合わせ<br>
                                    二部電設 株式会社　個人情報問合せ窓口担当者<br>
                                    〒154-0003<br>
                                    東京都世田谷区野沢4丁目5-21<br>
                                    TEL：03-3795-8780<br>
                                    FAX：03-3412-7230<br>
                                    MAIL：nibedensetsu@hotmail.com</p>
                                    <p class="contact-form-policy-box__item-text">7.改定<br>
                                    当社は、当社の裁量に基づいて、本ポリシーを変更します。但し、個人情報保護法その他の法令により、改定に必要な手続が定められている場合には、当該法令に基づき改定を行うものとします。</p>
                                </div>
                            </div>
                        </div>
                        <p class="contact-form-policy-checkbox">
                            <input id="agree" type="checkbox" name="個人情報の取扱いについて" value="同意する" size="" required>
                            <label class="agree-label" for="agree">同意する</label>
                        </p>
                    </div>
                    <div class="contact-form-submit">
                        <p class="contact-form-submit__body"><input type="submit" value="送信する"></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- /main -->
<?php include('footer.php'); ?>