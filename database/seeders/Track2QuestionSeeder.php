<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Track2QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 201,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu 1',
                                                   'group'       => 'Selling - Data Master',
                                                   'description' => '<p>Bạn Sales Rep A phụ trách 50 cửa hàng, trong đó: </p>
<ul>
<li>25 cửa hàng (loại A) cần ghé thăm 4 lần/4 tuần</li>
<li>10 cửa hàng (loại B) cần ghé thăm 2 lần/4 tuần, bắt đầu từ tuần 1 trong tháng</li>
<li>8 cửa hàng (loại C) cần ghé thăm 2 lần/tuần, bắt đầu từ tuần thứ 2 trong tháng</li>
<li>5 cửa hàng (loại D) cần ghé thăm 1 lần/4 tuần</li>
</ul>
<p>Biết tuần 1 bạn cần viếng thăm: 25+10 + 5 = 40 cửa hàng.</p>
<p>Hãy tiếp tục tính số cửa hàng bạn Sales Rep cần viếng thăm trong tuần 2-tuần 5.</p',
                                                   'infer'       => "<p>Đội ngũ bán hàng dựa trên tần suất cần viếng thăm của các cửa hàng để theo dõi và lên kế hoạch viếng thăm phù hợp từng tuần.</p>",
                                                   'explain'     => "<p>Mỗi tuần, bạn SR đều phải bắt đầu với ít nhất 25 cửa hàng loại A, do cần ghé đều đặn 4 lần/4 tuần. Từ con số 25 này: </p>
<ul>
<li>Ở tuần 1,cộng thêm 10 cửa hàng loại B,và 5 cửa hàng loại D.</li>
<li>Ở tuần 2, cộng thêm 8 cửa hàng loại C.</li>
<li>Ở tuần 3, cộng thêm 10 cửa hàng loại B</li>
<li>Ở tuần 4,lặp lại giống tuần 2, vì có 8 cửa hàng loại C cần ghé thăm lại</li>
<li>Ở tuần 5, lặp lại giống tuần 1.</li>
</ul>",
                                                   'template'    => 'templates.track-2.question-1',
                                                   'order'       => 1,
                                                   'answer'      => json_encode([
                                                                                    'week-2' => 33,
                                                                                    'week-3' => 35,
                                                                                    'week-4' => 33,
                                                                                    'week-5' => 40,
                                                                                ]),
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 202,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu 2',
                                                   'group'       => 'Selling - Data Master',
                                                   'description' => "<p>Tuyến thứ 2 của bạn Nhân viên Trưng bày siêu thị (Merchandiser) Nguyễn Văn A có 8 cửa hàng Minimart Vàng, và 4 cửa hàng Minimart Bạc, và 2 cửa hàng Minimart đồng.
Thời gian thực thi trưng bày ở mỗi lần ghé thăm cho 1 cửa hàng Minimart tương ứng là: </p>
<ul>
<li>Vàng: 30 phút</li>
<li>Bạc: 15 phút</li>
<li>Đồng: 7 phút</li>
</ul> 
<p>Biết rằng thời gian di chuyển đến mỗi cửa hàng là khoảng 10 phút.
Vậy, bạn A sẽ cần tối thiểu ? giờ để ghé thăm hết tuyến bán hàng của mình. Hãy điền số vào ô trống! (Làm tròn đến 2 chữ số thập phân) </p>",
                                                   'infer'       => "<p>Bộ phận Thương mại luôn cân đối và sắp xếp tuyến đường, số lượng cửa hàng phụ trách cũng như năng suất phù hợp của đội ngũ bán hàng để xây dựng kế hoạch thực thi hiệu quả trên từng ngày! </p>",
                                                   'suggest'     => "<p>Gợi ý: Tổng thời gian ghé thăm = (số cửa hàng trong tệp X thời gian ghé thăm 1 cửa hàng tương ứng) + tổng thời gian di chuyển giữa các điểm.</p>",
                                                   'explain'     => "<p>Tổng thời gian ghé thăm = (30 phút x 8 CH vàng) + (15 phút x 4 CH bạc) + (7 phút x 2 CH Đồng) + ( 10 phút di chuyển x 12 CH) </p>",
                                                   'order'       => 2,
                                                   'answer'      => json_encode([
                                                                                    'answer' => 7.23,
                                                                                ]),
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 203,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu 3',
                                                   'group'       => 'Selling - Data Master',
                                                   'description' => '<p>Độ phủ (Numeric distribution) của một sản phẩm đo lường "mức độ có mặt" của sản phẩm ấy trên tổng số điểm bán của thị trường, số này càng lớn thì tức là sản phẩm đã phủ được càng nhiều điểm bán (về mặt số lượng). Hiểu về độ phủ là nền tảng quan trọng, hãy thử tính độ phủ của Fuzetea trong một ví dụ sau đây nhé! </p>
<table>
    <tr>
        <th>Các điểm bán có trên thị trường</th>
        <th>Sản phẩm Fuzetea đã có mặt tại cửa hàng</th>
    </tr>
<tbody>
    <tr>
        <td>Siêu Thị A</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Siêu Thị B</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Siêu Thị C</td>
        <td>No</td>
    </tr>
    <tr>
        <td>Siêu Thị D</td>
        <td>No</td>
    </tr>
    <tr>
        <td>Siêu Thị E</td>
        <td>Yes</td>
    </tr>
</tbody>
</table>',
                                                   'infer'       => "<p>Đây là một trong những chỉ số mà phòng Thương mại đo lường để biết được độ phổ biến của nhãn hàng, để thấy hệ thống phân phối của chúng ta đã sâu rộng được tới đâu. Sản phẩm càng được phủ rộng rãi trên thị trường càng có nhiều cơ hội hơn để tiếp xúc với người tiêu dùng.</p>",
                                                   'suggest'     => "<p>Gợi ý: bạn có thể tính độ phủ của sản phẩm = Tổng số cửa hàng : Số cửa hàng mà sản phẩm đã có mặt</p>",
                                                   'explain'     => "<p>Hiện tại có tổng 5 cửa hàng trên thị trường. Và Fuzetea đã có mặt tại 3 cửa hàng. Khi đó, bạn có thể tính độ phủ của sản phẩm = 3:5 </p>",
                                                   'template'    => 'templates.track-2.question-3',
                                                   'order'       => 3,
                                                   'answer'      => json_encode([
                                                                                    'percent' => 60,
                                                                                ]),
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 204,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-4',
                                                   'title'       => 'Câu 4',
                                                   'group'       => 'Selling - Data Master',
                                                   'description' => '<p>Ngoài độ phủ, chúng ta còn có 1 khái niệm liên quan nữa là Tỷ trọng độ phủ (WTD – Weighted distribution), đo lường mức độ hiệu quả của kênh phân phối dựa trên mức độ bán hàng của điểm bán. Tiếp tục từ câu hỏi trên, giả sử biết thêm số bán của ngành hàng tương ứng tại mỗi cửa hàng như bên dưới, hãy thử tính Tỷ trọng độ phủ của Fuzetea nhé!
Gợi ý: chỉ số này có thể tính rất đơn giản bằng cách: lấy số bán của các cửa hàng đã có Fuzetea, chia tổng số bán của toàn bộ cửa hàng trên thị trường </p>
<table>
    <tr>
        <th>Các cửa hàng có trên thị trường</th>
        <th>Sản phẩm Fuzetea đã có mặt tại cửa hàng</th>
        <th>Số bán của tổng ngành hàng tương ứng tại cửa hàng (Trà đóng chai,lon các loại)</th>
    </tr>
<tbody>
    <tr>
        <td>Siêu Thị A</td>
        <td>Yes</td>
        <td>10</td>
    </tr>
    <tr>
        <td>Siêu Thị B</td>
        <td>Yes</td>
        <td>20</td>
    </tr>
    <tr>
        <td>Siêu Thị C</td>
        <td>No</td>
        <td>10</td>
    </tr>
    <tr>
        <td>Siêu Thị D</td>
        <td>No</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Siêu Thị E</td>
        <td>Yes</td>
        <td>20</td>
    </tr>
</tbody>
</table>
<p>Tỷ trọng độ phủ của FuzeTea trong tình huống này là ? %</p>
',
                                                   'infer'       => "<p>Đây là một trong những chỉ số vô cùng quan trọng để thấy được hiệu quả của kênh phân phối của chúng ta. Vì không phải 100% điểm bán đều mang lại hiệu quả cao, mà đôi khi còn tốn thêm chi phí, thời gian và nhân lực. Phòng thương mại thường xuyên theo dõi và đo lường để lọc ra những điểm bán có hiệu quả cao, từ đó đẩy mạnh tập trung để bao phủ. Chỉ số này cũng giúp ta có cái nhìn chính xác hơn về tiềm năng thị trường, nhằm đưa ra những kế hoạch phát triển hay mở rộng điểm bán hợp lí.</p>",
                                                   'suggest'     => "<p>Gợi ý: Hãy cộng tổng số bán của 5 cửa hàng trước (1), ngoài ra, cộng số bán của 3 cửa hàng đã có Fuzetea (2). Tỷ trọng độ phủ = (2):(1) </p>",
                                                   'explain'     => "<p>Tỷ trọng độ phủ = Số bán của các cửa hàng đã có Fuzetea (10+20+20), chia cho tổng số bán của toàn bộ cửa hàng trên thị trường (tổng 110, cho cả 5 cửa hàng) </p>",
                                                   'order'       => 4,
                                                   'answer'      => json_encode([
                                                                                    'percent' => 45,
                                                                                ]),
                                                   'created_at'  => $now,
                                                   'updated_at'  => $now,
                                               ]);


        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 211,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-1',
                                                   'title'       => 'Câu hỏi 1',
                                                   'group'       => 'Distributing - Data Master',
                                                   'description' => '<p>Có 03 khách hàng Key Account, đặt hàng vào ngày 26/03/2024 và có nhu cầu nhận hàng vào ngày 27/01/2024 với các thông tin chi tiết như bên dưới </p>
<table>
    <tr>
        <th>Tên khách hàng</th>
        <th>Tên sản phẩm đặt</th>
        <th>Số lượng đặt (thùng)</th>
    </tr>
<tbody>
    <tr>
        <td rowspan="2">Siêu Thị A</td>
        <td>COKE 320ML 24 SLEEK CAN CARTON TET</td>
        <td>520</td>
    </tr>
    <tr>
        <td>NUTRIBOOST 1L 6 PET SF ORANGE ENHANCED</td>
        <td>420</td>
    </tr>
    <tr>
        <td>Siêu Thị B</td>
        <td>COKE 320ML 24 SLEEK CAN CARTON TET</td>
        <td>910</td>
    </tr>
    <tr>
        <td>Siêu Thị C</td>
        <td>NUTRIBOOST 1L 6 PET SF ORANGE ENHANCED</td>
        <td>1040</td>
    </tr>
</tbody>
</table>
<p>Bảng quy cách đóng gói</p>
<table>
    <tr>
        <th>Tên sản phẩm</th>
        <th>Quy cách đóng gói</th>
    </tr>
<tbody>
    <tr>
        <td>COKE 320ML 24 SLEEK CAN CARTON TET</td>
        <td>130 thùng/pallet</td>
    </tr>
    <tr>
        <td>NUTRIBOOST 1L 6 PET SF ORANGE ENHANCED</td>
        <td>140 thùng/pallet</td>
    </tr>
</tbody>
</table>
',

                                                   'infer'      => "<p>Khi giao hàng từ nhà máy, chúng ta thường dùng đơn vị Pallet, mỗi nhóm sản phẩm có thể sẽ có quy cách đóng gói (số thùng trên 1 pallet) khác nhau từ đó cân nhắc trọng tải xe vận tải phù hợp.</p>",
                                                   'suggest'    => "<p>Gợi ý: Số Pallets = Số thùng khách hàng đặt : Quy cách đóng gói </p>",
                                                   'explain'    => "<ul>
<li>Siêu thị A = (520:130) + (420:140)</li>
<li>Siêu thị B = 910:130</li>
<li>Siêu thị C = 1040:140</li>
</ul>",
                                                   'order'      => 11,
                                                   'answer'     => json_encode([
                                                                                   'A' => 7,
                                                                                   'B' => 3,
                                                                                   'C' => 8,
                                                                               ]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 212,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-2',
                                                   'title'       => 'Câu hỏi 2',
                                                   'group'       => 'Distributing - Data Master',
                                                   'description' => '<p>Ta biết tổng Pallets hàng cần giao (từ đáp án của câu trên), và biết thêm chi tiết về khu vực giao hàng, cũng như thời gian cần nhận hàng của 3 đơn như bên dưới: </p>
<table>
    <tr>
        <th>Tên khách hàng</th>
        <th>Tổng Pallets cần giao</th>
        <th>Địa chỉ</th>
        <th>Thời gian nhận hàng</th>
    </tr>
<tbody>
    <tr>
        <td>Siêu Thị A</td>
        <td>7</td>
        <td>Quận 02</td>
        <td>20:30 – 24:00</td>
    </tr>
    <tr>
        <td>Siêu Thị B</td>
        <td>7</td>
        <td>Quận 02</td>
        <td>20:30 – 24:00</td>
    </tr>
    <tr>
        <td>Siêu Thị C</td>
        <td>8</td>
        <td>Quận 01</td>
        <td>16:00 – 20:00</td>
    </tr>
</tbody>
</table>
<p>a có 1 nhà cung cấp dịch vụ vận tải tên là Phương Nam, họ đưa ra Đơn giá (VND/Pallet) tương ứng với Khung xe vận chuyển để giao tới Quận 1 & Quận 2 như trong bảng dưới</p>
<table>
    <tr>
        <th>Khung xe vận chuyển</th>
        <th>Đơn giá của nhà vận tải Phương Nam (VNĐ/Pallet)</th>
    </tr>
<tbody>
    <tr>
        <td>2 Pallets</td>
        <td>94.000</td>
    </tr>
    <tr>
        <td>14 Pallets</td>
        <td>80.000</td>
    </tr>
    <tr>
        <td>24 Pallets</td>
        <td>70.000</td>
    </tr>
</tbody>
</table>
<p>Trong điều kiện không có giới hạn về số lượng xe và tải trọng, hãy LỰA CHỌN PHƯƠNG ÁN GHÉP XE sao cho tối ưu tiền cước vận chuyển mà vẫn đáp ứng các điều kiện giao hàng của khách hàng.</p>
<p>Gợi ý: 16:00 – 20:00 là khung giờ cấm tải tại các khu vực trung tâm TP.HCM, chỉ có xe 2 Pallets mới có thể di chuyển giao hàng trong khung thời gian này, và có thể ghép xe đối với các Khách hàng trong cùng khu vực để tối ưu chi phí.</p>',

                                                   'infer'      => "<p>Bộ phận Logistics có vai trò tối ưu hóa việc giao hàng, thông qua việc ghép xe và lựa chọn trọng tải xe sao cho phù hợp và tối ưu nhất có thể, nhưng vẫn đáp ứng được nhu cầu khách hàng.</p>",
                                                   'suggest'    => "<p>Hãy đọc kĩ lại các gợi ý đề bài đã đưa ra ban đầu nhé: - Giao hàng khung giờ 16:00 – 20:00: chỉ có xe 2 Pallets mới có thể di chuyển giao hàng - Có thể ghép xe đối với các Khách hàng trong cùng khu vực để tối ưu chi phí.</p>",
                                                   'explain'    => "<p>Do siêu thị A&B cùng ở khu vực Quận 2, và Giải số lượng Pallets cần giao ở mỗi nơi là 7 thích Pallets, vừa đủ để giao chung bằng 1 xe 14 Pallets – đây là phương án tối ưu nhất. </p>",
                                                   'data'       => json_encode([
                                                                                   'A' => [
                                                                                       'Siêu Thị A, Siêu Thị B đi chung xe 14 Pallets',
                                                                                       'Siêu Thị C giao bằng xe 2 Pallets, tách giao 4 lần.',
                                                                                   ],
                                                                                   'B' => [
                                                                                       'Siêu Thị A, Siêu Thị B đi chung xe 14 Pallets',
                                                                                       'Siêu Thị C giao bằng xe 14 Pallets, giao một lần.'
                                                                                   ],
                                                                                   'C' => [
                                                                                       'Siêu Thị A, Siêu Thị B và Siệu Thị C giao chung một lần xe 24 Pallets'
                                                                                   ],
                                                                               ]),
                                                   'order'      => 12,
                                                   'answer'     => json_encode([
                                                                                   'answer' => 'A',
                                                                               ]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 213,
                                                   'track_id'     => 200,
                                                   'slug'        => 'question-3',
                                                   'title'       => 'Câu hỏi 3',
                                                   'group'       => 'Distributing - Data Master',
                                                   'description' => '<p>Như vậy, với Phương án giao hàng tối ưu của câu trên, ta có các chi tiết vận tải như sau: </p>
<table>
    <tr>
        <th>Tên khách hàng</th>
        <th>Tổng Pallets cần giao</th>
        <th>Phương án xe vận tải tối ưu</th>
    </tr>
<tbody>
    <tr>
        <td>Siêu Thị A</td>
        <td>7</td>
        <td rowspan="2">Giao chung 1 xe khung 14 Pallets</td>
    </tr>
    <tr>
        <td>Siêu Thị B</td>
        <td>7</td>
    </tr>
    <tr>
        <td>Siêu Thị C</td>
        <td>8</td>
        <td>Giao bằng xe khung 2 Pallets, tách giao 4 lần</td>
    </tr>
</tbody>
</table>
<table>
    <tr>
        <th>NVT</th>
        <th>Đơn giá (VNĐ/Pallet)</th>
        <th>Khung xe vận chuyển</th>
    </tr>
<tbody>
    <tr>
        <td>Phương Nam</td>
        <td>94.000</td>
        <td>2 Pallets</td>
    </tr>
    <tr>
        <td>Phương Nam</td>
        <td>80.000</td>
        <td>14 Pallets</td>
    </tr>
</tbody>
</table>
<p>Biết Chi phí giao hàng = Số pallet cần giao x Đơn giá vận chuyển. Hãy tính toàn bộ chi phí giao hàng đến 3 siêu thị.</p>
<p>Gợi ý: 16:00 – 20:00 là khung giờ cấm tải tại các khu vực trung tâm TP.HCM, chỉ có xe 2 Pallets mới có thể di chuyển giao hàng trong khung thời gian này, và có thể ghép xe đối với các Khách hàng trong cùng khu vực để tối ưu chi phí.</p>',

                                                   'infer'      => "<p>Chi phí giao hàng là một trong những chỉ số mà bộ phận Logistics cần đo lường và cân nhắc để đưa ra Phương án vận tải tối ưu nhất.</p>",
                                                   'suggest'    => "<p>Gợi ý: Chi phí giao hàng = số pallet cần giao x Đơn giá vận chuyển. Tuy nhiên hãy chú ý rằng siêu thị C cần tách giao đến 4 lần với loại xe 2 pallets</p>",
                                                   'explain'    => "<p>Giao đến Siêu thị A và B bằng 1 xe 14 Pallets -> Chi phí = 80.000x14 </p>
<p>Giao đến siêu thị C bằng xe 2 Pallets, giao 4 lần -> Chi phí = 94.000 x 2 x 4</p>
<p>Toàn bộ chi phí giao hàng là phép cộng tổng của 2 chi phí trên.</p>",
                                                   'order'      => 13,
                                                   'answer'     => json_encode([
                                                                                   1 => '1.120.000',
                                                                                   2 => '752.000',
                                                                                   3 => '1.872.000',
                                                                               ]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 221,
                                                   'track_id'     => 200,
                                                   'slug'        => 'thu-thach-xep-tu-lanh',
                                                   'title'       => 'Thử thách xếp tủ lạnh',
                                                   'group'       => 'Selling - Problem Solver 1',
                                                   'description' => '<p>Đây là tủ lạnh FV_400. Từ hiện trạng thực tại cũng như số lượng sản phẩm bên dưới đang cần bổ sung vào tủ lạnh, bạn hãy thử vào vai một nhân viên bán hàng, sắp xếp và trưng bày tủ lạnh để đảm bảo sự hiện diện tối ưu nhất của các sản phẩm của chúng ta nhé! Bạn có 2 phút để kéo thả các vật phẩm vào vị trí hợp lý. </p>
<p>Thiết kế game & hình ảnh:</p>
<ul>
<li>1 tủ lạnh có sẵn (mẫu bên cạnh)</li>
<li>Chon gười chơi quyền kéo thả các sản phẩm từ trong tủ lạnh ra 1 khu bên ngoài (kiểu như dọn dẹp lại tủ ấy)</li>
<li>Đồng thời, Visualize các lốc sản phẩm đặt bên dưới tủ lạnh, Cho người chơi quyền kéo thả lên các vị trí trống trên tủ lạnh (tức người chơi phải kéo bỏ những vật dư đang có trên tủ đã rồi mới kéo vào được). Khi rê choột kéo vào thì hiện dạng 1 lon/1 chai thôi chứ ko phải cả lốc nhé.</li>
<li>Cho đồng hồ chạy ngược 2 phút</li>
<li>Người chơi bấm nút “Hoàn thành” để nộp bài sau khi đã xếp xong nếu trước thời hạn 2p</li>
</ul>
<p>Visualize: mô tả không gian 1 cửa hàng, trong đó spotlight cho Tủ lạnh của Coke, xung quanh có thể dán thêm các posters của Coke, v..v..</p>
',

                                                   'infer'      => "",
                                                   'suggest'    => "",
                                                   'explain'    => "",
                                                   'order'      => 21,
                                                   'template'   => 'templates.track-2.problem-solver-1-1',
                                                   'answer'     => json_encode([]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 222,
                                                   'track_id'     => 200,
                                                   'slug'        => 'problem-solver-1',
                                                   'title'       => 'Problem Solver 1 - 2',
                                                   'group'       => 'Selling - Problem Solver 1',
                                                   'description' => '<p>Từ các options của tệp khách hàng, và kênh phân phối có sẵn (để ở bên dưới), người chơi kéo thả các options về đúng chỗ của 4 khách hàng trên background</p>',

                                                   'infer'      => "",
                                                   'suggest'    => "",
                                                   'explain'    => "",
                                                   'order'      => 22,
                                                   'template'   => 'templates.track-2.problem-solver-1-2',
                                                   'answer'     => json_encode([]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);

        DB::table('questions')->insertOrIgnore([
                                                   'id'          => 225,
                                                   'track_id'     => 200,
                                                   'slug'        => 'problem-solver-2-cau-hoi-1',
                                                   'title'       => 'Câu hỏi 1',
                                                   'group'       => 'Selling - Problem Solver 2',
                                                   'description' => '<p>Có 03 khách hàng Key Account, đặt hàng vào ngày 26/03/2024 và có nhu cầu nhận hàng vào ngày 27/01/2024 với các thông tin chi tiết như bên dưới ...</p>',

                                                   'infer'      => "",
                                                   'suggest'    => "",
                                                   'explain'    => "",
                                                   'order'      => 25,
                                                   'template'   => 'templates.track-2.problem-solver-2-1',
                                                   'answer'     => json_encode([]),
                                                   'created_at' => $now,
                                                   'updated_at' => $now,
                                               ]);
    }
}
