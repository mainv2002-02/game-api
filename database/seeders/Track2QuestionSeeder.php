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
        DB::table('question')->insertOrIgnore([
                                                  'id'          => 201,
                                                  'slug'        => 'question-1',
                                                  'title'       => 'Câu 1',
                                                  'description' => "Bạn Sales Rep A phụ trách 50 cửa hàng, trong đó:
• 25 cửa hàng (loại A) cần ghé thăm 4 lần/4 tuần
• 10 cửa hàng (loại B) cần ghé thăm 2 lần/4 tuần, bắt đầu từ tuần 1 trong tháng
• 8 cửa hàng (loại C) cần ghé thăm 2 lần/tuần, bắt đầu từ tuần thứ 2 trong tháng
• 5 cửa hàng (loại D) cần ghé thăm 1 lần/4 tuần
Biết tuần 1 bạn cần viếng thăm: 25+10 + 5 = 40 cửa hàng.
Hãy tiếp tục tính số cửa hàng bạn Sales Rep cần viếng thăm trong tuần 2-tuần 5.",
                                                  'infer'       => "Đội ngũ bán hàng dựa trên tần suất cần viếng thăm của các cửa hàng để theo dõi và lên kế hoạch viếng thăm phù hợp từng tuần.",
                                                  'explain'     => "Mỗi tuần, bạn SR đều phải bắt đầu với ít nhất 25 cửa hàng loại A, do cần ghé đều đặn 4 lần/4 tuần. Từ con số 25 này:
• Ở tuần 1,cộng thêm 10 cửa hàng loại B,và 5 cửa hàng loại D.
• Ở tuần 2, cộng thêm 8 cửa hàng loại C.
• Ở tuần 3, cộng thêm 10 cửa hàng loại B
• Ở tuần 4,lặp lại giống tuần 2, vì có 8 cửa hàng loại C cần ghé thăm lại
• Ở tuần 5, lặp lại giống tuần 1.",
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

        DB::table('question')->insertOrIgnore([
                                                  'id'          => 202,
                                                  'slug'        => 'question-2',
                                                  'title'       => 'Câu 2',
                                                  'description' => "Tuyến thứ 2 của bạn Nhân viên Trưng bày siêu thị (Merchandiser) Nguyễn Văn A có 8 cửa hàng Minimart Vàng, và 4 cửa hàng Minimart Bạc, và 2 cửa hàng Minimart đồng.
Thời gian thực thi trưng bày ở mỗi lần ghé thăm cho 1 cửa hàng Minimart tương ứng là: 
- Vàng: 30 phút,
- Bạc: 15 phút
- Đồng: 7 phút
Biết rằng thời gian di chuyển đến mỗi cửa hàng là khoảng 10 phút.
Vậy, bạn A sẽ cần tối thiểu ? giờ để ghé thăm hết tuyến bán hàng của mình. Hãy điền số vào ô trống! (Làm tròn đến 2 chữ số thập phân)",
                                                  'infer'       => "Bộ phận Thương mại luôn cân đối và sắp xếp tuyến đường, số lượng cửa hàng phụ trách cũng như năng suất phù hợp của đội ngũ bán hàng để xây dựng kế hoạch thực thi hiệu quả trên từng ngày!",
                                                  'suggest'     => "Gợi ý: Tổng thời gian ghé thăm = (số cửa hàng trong tệp X thời gian ghé thăm 1 cửa hàng tương ứng) + tổng thời gian di chuyển giữa các điểm.",
                                                  'explain'     => "Tổng thời gian ghé thăm = (30 phút x 8 CH vàng) + (15 phút x 4 CH bạc) + (7 phút x 2 CH Đồng) + ( 10 phút di chuyển x 12 CH)",
                                                  'order'       => 2,
                                                  'answer'      => json_encode([
                                                                                   'answer' => 7.23,
                                                                               ]),
                                                  'created_at'  => $now,
                                                  'updated_at'  => $now,
                                              ]);

        DB::table('question')->insertOrIgnore([
                                                  'id'          => 203,
                                                  'slug'        => 'question-3',
                                                  'title'       => 'Câu 3',
                                                  'description' => 'Độ phủ (Numeric distribution) của một sản phẩm đo lường "mức độ có mặt" của sản phẩm ấy trên tổng số điểm bán của thị trường, số này càng lớn thì tức là sản phẩm đã phủ được càng nhiều điểm bán (về mặt số lượng). Hiểu về độ phủ là nền tảng quan trọng, hãy thử tính độ phủ của Fuzetea trong một ví dụ sau đây nhé!',
                                                  'data'        => json_encode([
                                                                                   'A' => [
                                                                                       'exist' => 1,
                                                                                   ],
                                                                                   'B' => [
                                                                                       'exist' => 1,
                                                                                   ],
                                                                                   'C' => [
                                                                                       'exist' => 0,
                                                                                   ],
                                                                                   'D' => [
                                                                                       'exist' => 0,
                                                                                   ],
                                                                                   'E' => [
                                                                                       'exist' => 1,
                                                                                   ],
                                                                               ]),
                                                  'infer'       => "Đây là một trong những chỉ số mà phòng Thương mại đo lường để biết được độ phổ biến của nhãn hàng, để thấy hệ thống phân phối của chúng ta đã sâu rộng được tới đâu. Sản phẩm càng được phủ rộng rãi trên thị trường càng có nhiều cơ hội hơn để tiếp xúc với người tiêu dùng.",
                                                  'suggest'     => "Gợi ý: bạn có thể tính độ phủ của sản phẩm = Tổng số cửa hàng : Số cửa hàng mà sản phẩm đã có mặt",
                                                  'explain'     => "Hiện tại có tổng 5 cửa hàng trên thị trường. Và Fuzetea đã có mặt tại 3 cửa hàng. Khi đó, bạn có thể tính độ phủ của sản phẩm = 3:5",
                                                  'template'    => 'templates.track-2.question-3',
                                                  'order'       => 3,
                                                  'answer'      => json_encode([
                                                                                   'percent' => 60,
                                                                               ]),
                                                  'created_at'  => $now,
                                                  'updated_at'  => $now,
                                              ]);

        DB::table('question')->insertOrIgnore([
                                                  'id'          => 204,
                                                  'slug'        => 'question-4',
                                                  'title'       => 'Câu 4',
                                                  'description' => 'Ngoài độ phủ, chúng ta còn có 1 khái niệm liên quan nữa là Tỷ trọng độ phủ (WTD – Weighted distribution), đo lường mức độ hiệu quả của kênh phân phối dựa trên mức độ bán hàng của điểm bán. Tiếp tục từ câu hỏi trên, giả sử biết thêm số bán của ngành hàng tương ứng tại mỗi cửa hàng như bên dưới, hãy thử tính Tỷ trọng độ phủ của Fuzetea nhé!
Gợi ý: chỉ số này có thể tính rất đơn giản bằng cách: lấy số bán của các cửa hàng đã có Fuzetea, chia tổng số bán của toàn bộ cửa hàng trên thị trường',
                                                  'data'        => json_encode([
                                                                                   'A' => [
                                                                                       'exist' => 1,
                                                                                       'value' => 10,
                                                                                   ],
                                                                                   'B' => [
                                                                                       'exist' => 1,
                                                                                       'value' => 20,
                                                                                   ],
                                                                                   'C' => [
                                                                                       'exist' => 0,
                                                                                       'value' => 10,
                                                                                   ],
                                                                                   'D' => [
                                                                                       'exist' => 0,
                                                                                       'value' => 50,
                                                                                   ],
                                                                                   'E' => [
                                                                                       'exist' => 1,
                                                                                       'value' => 20,
                                                                                   ],
                                                                               ]),
                                                  'infer'       => "Đây là một trong những chỉ số vô cùng quan trọng để thấy được hiệu quả của kênh phân phối của chúng ta. Vì không phải 100% điểm bán đều mang lại hiệu quả cao, mà đôi khi còn tốn thêm chi phí, thời gian và nhân lực. Phòng thương mại thường xuyên theo dõi và đo lường để lọc ra những điểm bán có hiệu quả cao, từ đó đẩy mạnh tập trung để bao phủ. Chỉ số này cũng giúp ta có cái nhìn chính xác hơn về tiềm năng thị trường, nhằm đưa ra những kế hoạch phát triển hay mở rộng điểm bán hợp lí.",
                                                  'suggest'     => "Gợi ý: Hãy cộng tổng số bán của 5 cửa hàng trước (1), ngoài ra, cộng số bán của 3 cửa hàng đã có Fuzetea (2). Tỷ trọng độ phủ = (2):(1)",
                                                  'explain'     => "Tỷ trọng độ phủ = Số bán của các cửa hàng đã có Fuzetea (10+20+20), chia cho tổng số bán của toàn bộ cửa hàng trên thị trường (tổng 110, cho cả 5 cửa hàng)",
                                                  'template'    => 'templates.track-2.question-3',
                                                  'order'       => 4,
                                                  'answer'      => json_encode([
                                                                                   'percent' => 45,
                                                                               ]),
                                                  'created_at'  => $now,
                                                  'updated_at'  => $now,
                                              ]);
    }
}
