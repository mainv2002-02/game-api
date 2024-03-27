<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();
        // Track 1
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1011,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Business Planning',
                                                   'description' => '<p>Ngành hàng nào sẽ đóng góp nhiều nhất vào sự tăng trưởng của NARTD trong những năm tiếp theo?</p>
<ul>
<li>A. Beverage 5</li>
<li>B. Beverage 11</li>
<li>C. Beverage 7</li>
<li>D. Beverage 9</li>
</ul> ',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'D',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1012,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Demand Planning',
                                                   'description' => '<p>Tìm Doanh thu Beverage 9 cần đạt của vùng Hà Nội trong năm 2024, biết: 
1. Doanh thu trung bình mỗi UC sản phẩm của 2023:12,000VND
2. Mục tiêu tăng trưởng Doanh thu/UC của 2024 so với 2023: 1%
3. Sản lượng đã bán trong năm 2023 là: 471.48UC
4. Mục tiêu tăng trưởng sản lượng của 2024 so với 2023 là: 5%
 Doanh thu cần đạt của vùng Hà Nội trong năm 2024 là ... USD (làm tròn đến hàng triệu)</p>',
                                                   'infer'       => '<p>Ắt hẳn bạn đã có sự nhầm lẫn! Trước hết bạn cần tính mục tiêu tăng trưởng Doanh thu/UC của 2024, sau đó tính mục tiêu tăng trưởng sản lượng của 2024, từ đó mới ra được Doanh thu cần đạt</p>',
                                                   'explain'     => '<p>Tại phòng Demand planning, bạn cần hết sức cẩn trọng, chi tiết, tỉ mỉ tính toán từ những con số lớn hàng năm cho đến những con số nhỏ nhất hàng ngày để đảm bảo phản ánh đúng nhu cầu thị trường!</p>',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => '6000000',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1013,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu 3',
                                                   'group'       => 'Supply Planning',
                                                   'description' => '<p>Với 6,000,000 USD đã tính phía trên sẽ được tiếp tục chia nhỏ theo quý, tính toán kỹ từng SKU. Sau đó, Supply Planning sẽ tính nguyen vật liệu cần để sản xuất đáp ứng được nhu cầu của thị trường. Hãy nhìn vào ví dụ nhỏ dưới đây và điền vào ô xanh lá để hiểu một cách cơ bản nhất về công việc của Phòng Kế hoạch.</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1014,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-4',
                                                   'title'       => 'Câu 4',
                                                   'group'       => 'MANUFACTURING - Processing',
                                                   'description' => '<p>Đầu tiên, khi tất cả các nguyen vật liệu cần đều đã được kiểm tra nghiêm ngặt và xác nhận đảm bảo chất lượng, bước đầu tiên trong hành trình tạo nên điều kỳ diệu chính là pha chế syrup.
Theo kế hoạch sản xuất, thứ 4 cần cấp cho line 8 40 Unit Sprite. Phòng CSD quyết định pha syrup Sprite vào tank 7. Sau khi CIP, tạo barcode và đổ hương xong, một lượng nước sẽ tự động được thêm vào final tank theo barcode được tạo sẵn. Đợi 30 phút tuần hoàn, operator lấy mẫu ở final tank 7 (syrup đặc) để đo độ brix ở lab. Kết quả thu được brix fresh là 27.33oBrix. Tính lượng nước cần thêm vào (theo kg) để đạt được độ brix chuẩn theo MMI (26.23 ± 0.2) oBrix.
Biết, theo MMI, lượng syrup khi pha 40 Unit là 14788 kg.
Lưu ý: Chỉ có thể thêm nước vào theo số chục chẵn. (Ví dụ: 20, 40, 60, 80, 100,...) Lượng nước cần thêm là: ... (Kg)</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => '580',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1015,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-5',
                                                   'title'       => 'Câu 5',
                                                   'group'       => 'MANUFACTURING - Packaging',
                                                   'description' => '<p>Sau khi syrup đã được pha chế đạt tiêu chuẩn, syrup sẽ được chiết vào CAN, đi đến giai đoạn tiếp theo – đóng gói. Một chỉ số rất quan trọng để theo dõi hiệu suất của máy chính là USLE. Ta có công thức:
USLE= Earned time / Paid ship time
Earn time là số tiền tính theo sản phẩm sản xuất ra dựa trên công suất tiêu chuẩn của máy
Paid time là số giờ phải trả lương cho nhân viên.
Trong ca 1 (8 tiếng), Line 9 sản xuất được xx lon, biết công suất tiêu chuẩn của Line 9 à 90,000 CAN/h. Hãy tính %USLE của Line 9 trong ca vừa rồi.
USLE = ...</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1016,
                                                   'track_id'    => 101,
                                                   'slug'        => 'question-6',
                                                   'title'       => 'Câu 6',
                                                   'group'       => 'MANUFACTURING - Engineering',
                                                   'description' => '<p>Đúng lúc này, 1 chị engineering tiến tới kiểm tra cảm biến của máy packer. Hãy giúp chị ấy 1 tay nào!
Các cảm biến đo lường trong nhà máy sẽ xuất tín hiệu dưới dạng 4-20 mA ứng với giá trị 0%-100% của thang đo. Ví dụ cảm biến nhiệt độ được cài đặt để đo nhiệt độ từ 20-100 độ C thì theo thang quy đổi khi cổng output đo được 4 mA tức giá trị nhiệt độ tương ứng là 20 độ, khi giá trị output đo được là 20mA thì giá trị nhiệt độ tương ứng 100 độ C. Ở các máy chiết hotfill nhiệt độ chiết là 87 độ C, tín hiệu xuất ra của cảm biến là 18.4mA. Hỏi đây có phải là 1 tín hiệu đúng?
A. Đúng
B. Sai (Nếu chọn đáp án này sẽ hiện ra 1 dòng để nhân
viên nhập vào giá trị đúng)
 Vậy tín hiệu xuất ra của cảm biến đúng là ... mA</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => '17.4',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        //Hero2 - Track 1
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2011,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Business Planning',
                                                   'description' => '<p>Kéo thả matching</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2012,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Demand Planning',
                                                   'description' => '<p>Trong giai đoạn cuối năm 2023, kênh KA OFF tại vùng HCM được dự báo sẽ bán 50 ngàn thùng COCA- COLA SLEEK CAN 320M trong tuần cuối tháng 11. Tuy nhiên, thực tế chúng ta bán được tốt hơn dự kiến. Đâu có thể là lý do cho việc này?
a. Coke bán số lượng rất lớn sản phẩm cho khách hàng với giá thấp trong tuần cuối tháng 11, đơn hàng này phát sinh ngoài kế hoạch dự báo.
b. Coke chạy các chương trình khuyến mãi cho khách hàng trong tuần cuối tháng 11, thu hút một số lượng lớn khách hàng sử dụng sản phẩm.
c. Đối thủ chạy các chương trình khuyến mãi đặt biệt trong tuần cuối tháng 11 nhưng không cạnh tranh bằng Coke khiến cho khách hàng từ trung thành của đối thủ chuyển sang sử dụng sản phẩm của Coke.</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2013,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu 3',
                                                   'group'       => 'Supply Planning',
                                                   'description' => '<p>Vào mùa tết, nhu cầu thị trường miền Bắc tăng đột biến cho sản phẩm Fanta Cam, lon 320ml carton Tết, tồn kho của nguyên vật liệu sản xuất Fanta Cam không đủ để đáp ứng sự gia tăng đó.
Hương liệu được mua dựa trên nhu cầu của từng vùng sản xuất.
Hãy cho biết những phương án khả thi để giải quyết tình huống trên.
5 phương án dưới đây sẽ được xáo trộn khác nhau cho mỗi nhân viênnhiệm vụ của người chơi là kéo thả các phương án theo đúng thứ tự ưu tiên</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2014,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-4',
                                                   'title'       => 'Câu 4',
                                                   'group'       => 'Supply Planning',
                                                   'description' => '<p>Chương trình Summer UTC là một trong những chương trình lớn nhất của mùa hè, vì thiết kế sản phẩm có sự khác biệt so với phiên bản thông thường nên đòi hỏi nguyên vật liệu phải được chuẩn bị từ trước để phục vụ cho đợt tung sản phẩm vào đầu tháng 5.
Biết rằng:
- Thời gian cần cho việc sản xuất và đưa sản phẩm ra thị trường là: 2 tuần
- Thời gian cần cho việc đặt hương liệu sản xuất là: 8 tuần
- Thời gian cần cho việc đặt lon/preform (sản xuất vỏ chai) là: 6 tuần
- Thời gian cần cho việc đặt nắp lon/chai là: 5 tuần
- Thời gian cần cho việc đặt carton/ màng co là: 2 tuần
Biết tuần cần launching là tuần 18 của năm 2024, hãy cho biết thời gian cụ thể cho việc đặt nắp lon, carton
Lưu ý: leadtime của nguyên vật liệu phải được tính trước thời điểm sản xuất</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2015,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-5',
                                                   'title'       => 'Câu 5',
                                                   'group'       => 'Supply Planning',
                                                   'description' => '<p>Vào cuối ngày 20/01/2024, số lượng tồn kho của Coca-Cola lon 320ml Carton còn lại 80 000 thùng. Để đáp ứng cho đơn hàng 120 000 thùng phát sinh cho ngày 24/01/2024, nhà máy miền Nam phải gấp rút thay đổi kế hoạch sản xuất để tập trung chạy mặt hàng này phục vụ cho nhu cầu.
Hãy cho biết những vấn đề cần quan tâm để đưa ra giải pháp cho tình huống trên (có nhiều đáp án đúng)
1. Đảm bảo tồn kho nguyên vật liệu (hương liệu, lon, film, carton,...) còn đủ để sản xuất cho nhu cầu nàychọn đúng thì hương liệu, lon, film, carton xuất hiện
2. Đảm bảo dây chuyền sản xuất đủ công suất để sản xuất cho nhu cầu này.chọn đúng thì dây chuyền sản xuất xuất hiện
3. Huy động nhân lực (operator, thủ kho,...) để hỗ trợ cho tình huống này.chọn đúng thì nhân lực xuất hiện
4. Vận chuyển hàng thành phẩm từ các vùng bán hàng khác.chọn đúng thì xe vận chuyển xuất hiện
5. Không đáp ứng đơn hàng này. (câu trả lời sai)
6. Mở rộng nhà máy để sản xuất cho đơn hàng này. (câu trả lời sai)
</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2016,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-6',
                                                   'title'       => 'Câu 6',
                                                   'group'       => 'MANUFACTURING - Processing',
                                                   'description' => '<p>Đầu tiên, khi tất cả các nguyen vật liệu cần đều đã được kiểm tra nghiêm ngặt và xác nhận đảm bảo chất lượng, bước đầu tiên trong hành trình tạo nên điều kỳ diệu chính là pha chế syrup.
Bạn có biết Syrup của Coca Cola Original được pha bằng máy tự động 5S hay không, hãy cùng khám phá quy trình cụ thể sau đây nhé
B1: chọn tank Final Syrup trống trong 10 tank có sẵn (1,2,7,8,9,10) B2: Đặt tên cho Tank
B3: Chọn công thức ứng với mã sản phẩm pha chế
B4: Bơm đường Simple Syrup
B5: Bơm đường HFCS
B6: Bấm nút " Sản xuất"
B7: Đo đạc các thông số của Syrup
Nhiệm vụ hôm này của bạn là cần pha Syrup Coke Original vào tank số 7 theo công thức số 32 ( 95% HFCS, lấy Simple Syrup và HFCS từ tank 2, hãy giúp anh Operator pha mẻ Syrup này nhé.
</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2017,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-7',
                                                   'title'       => 'Câu 7',
                                                   'group'       => 'MANUFACTURING - Processing',
                                                   'description' => '<p>Bạn có biết rằng việc kiểm tra các chỉ tiêu chất lượng là điều vô cùng quan trọng trong quá trình sản xuất không? bạn hãy xem bảng quy định chất lượng sản phẩm sau đây nhé.
Bạn là 1 người vận hành Line 9, Sau khi bạn đo chỉ tiêu chẩt lượng sản phẩm và nhập vào báo cáo thì hệ thống xuất ra đồ thị như sau. Bạn sẽ làm gì tiếp theo?
A. Tiếp tục theo dõi thêm do các thông số vẫn đang ở ngưỡng cho phép
B. Điều chỉnh ngay thông số để sửa lỗi khi CO2 đang tăng vọt
</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2017,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-7',
                                                   'title'       => 'Câu 7',
                                                   'group'       => 'MANUFACTURING - EOSH',
                                                   'description' => '<p>Khi điều chỉnh, operator phát hiện cảm biến xảy ra lỗi lớn, cần sự hỗ trợ từ đội ngũ kỹ sư.
Thế nhưng, bạn có biết trước khi tiến hành sửa bất kì máy móc thiết bị nào, người kỹ sư/ vận hành phải tiến hành cách xả và cách ly các nguồn năng lượng không? Và để làm điều này, chúng ta sẽ dùng khóa LOTO (Log out- Tag out). Hãy cho biết với máy này sẽ dùng loại khóa nào?</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2018,
                                                   'track_id'    => 201,
                                                   'slug'        => 'question-8',
                                                   'title'       => 'Câu 8',
                                                   'group'       => 'MANUFACTURING - Engineering',
                                                   'description' => '<p>Sau đó, người kĩ sư tiến hành sửa máy, điều đầu tiên anh cần làm là nhìn vào màn hình vận hành để xem hệ thống báo lỗi gìnhân viên nhìn vào màn hình, màn hình chớp chớp đỏ chỗ máy packernhân viên chọn đúng chỗ chớp đỏ thì popup window hiện ra báo là máy packer bi thiếu lon  Kĩ sư tiến về phía máy packer để kiểm tra thì phát hiện nguyên nhân là con sensor băng tải bị hư  người chơi phải ra kiểm tra sensor thì phát hiện sensor bị hư và cần thay sensor mới, khi thay sensor thì phải nối dây tương ứng, theo chuẩn quốc tế dây nâu là dây dương, dây xanh là dây âm, dây đen là dây tín hiệu</p>',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'answer'      =>json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);

        // Hero 1 - Track 2
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1021,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1022,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 2,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1023,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu 3',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 3,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1026,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 6,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1027,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 7,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1028,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu 3',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 8,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1029,
                                                   'track_id'    => 102,
                                                   'slug'        => 'question-4',
                                                   'title'       => 'Câu 4',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 9,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        //Hero 1 - Track 3
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1031,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Finance',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1032,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Finance',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 2,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1033,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question',
                                                   'title'       => 'Câu hỏi',
                                                   'group'       => 'Legal',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 3,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1034,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu hỏi 1',
                                                   'group'       => 'PACS',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 4,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1035,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu hỏi 2',
                                                   'group'       => 'PACS',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 5,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 1036,
                                                   'track_id'    => 103,
                                                   'slug'        => 'question',
                                                   'title'       => 'Câu hỏi',
                                                   'group'       => 'People',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 6,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        //Hero 2 - track 1
        //Hero 2 - track 2
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2021,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu hỏi 1',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2022,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu hỏi 2',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 2,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2023,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu hỏi 3',
                                                   'group'       => 'Distributing',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 3,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        // selling
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2026,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Thử thách xếp tủ lạnh',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 6,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2027,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Thử thách xếp tủ lạnh (tiếp)',
                                                   'group'       => 'Selling',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 7,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2028,
                                                   'track_id'    => 202,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Question 3',
                                                   'group'       => 'Selling',
                                                   'description' => 'Từ các options của tệp khách hàng, và kênh phân phối có sẵn (để ở bên dưới), người chơi kéo thả các options về đúng chỗ của 4 khách hàng trên background.',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 8,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        //Hero 2 - track 3
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2031,
                                                   'track_id'    => 203,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Question 1',
                                                   'group'       => 'Finance',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 1,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2032,
                                                   'track_id'    => 203,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Question 2',
                                                   'group'       => 'Finance',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 2,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2033,
                                                   'track_id'    => 203,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Question 1',
                                                   'group'       => 'IT',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 3,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2034,
                                                   'track_id'    => 203,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Question 2',
                                                   'group'       => 'IT',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 4,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2035,
                                                   'track_id'    => 203,
                                                   'slug'        => 'error-1',
                                                   'title'       => 'Error 1',
                                                   'group'       => 'IT',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 5,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2036,
                                                   'track_id'    => 203,
                                                   'slug'        => 'error-2',
                                                   'title'       => 'Error 2',
                                                   'group'       => 'IT',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 6,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2037,
                                                   'track_id'    => 203,
                                                   'slug'        => 'ki-nang-1',
                                                   'title'       => 'Kĩ năng 1',
                                                   'group'       => 'People',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 7,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2038,
                                                   'track_id'    => 203,
                                                   'slug'        => 'ki-nang-2',
                                                   'title'       => 'Kĩ năng 2',
                                                   'group'       => 'People',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 8,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2039,
                                                   'track_id'    => 203,
                                                   'slug'        => 'ki-nang-3',
                                                   'title'       => 'Kĩ năng 3',
                                                   'group'       => 'People',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 9,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 2040,
                                                   'track_id'    => 203,
                                                   'slug'        => 'ki-nang-4',
                                                   'title'       => 'Kĩ năng 4',
                                                   'group'       => 'People',
                                                   'description' => '',
                                                   'infer'       => '',
                                                   'explain'     => '',
                                                   'template'    => '',
                                                   'order'       => 10,
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);
    }
}
