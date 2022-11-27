<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            [
                'name'     => 'Hồ Gươm',
                'address'  => 'Hà Nội',
                'content'  => 'Một trong những địa điểm du lịch gần Hà Nội mà bất kỳ du khách nào cũng nên đến khi đến với thủ đô đó chính là Hồ Gươm. Hồ Gươm nằm ngay ở trung tâm thành phố Hà Nội, đây được coi như một biểu tượng của thủ đô.Khi đến với Hồ Gươm, du khách sẽ được ngắm nhìn mặt hồ xanh mướt, mát mẻ với Tháp Rùa. Bạn có thể tự do tản bộ trên con đường xung quanh hồ để ngắm cảnh thủ đô. Hoặc bạn cũng có thể mua vé để qua cầu Thê Húc vào thăm đền Ngọc Sơn.'
            ],
            [
                'name'     => 'Làng gốm Bát Tràng',
                'address'  => 'Hà Nội',
                'content'  => 'Làng gốm Bát Tràng cũng là một trong những điểm du lịch thu hút được nhiều khách du lịch ghé thăm khi đến Hà Nội. Làng gốm Bát Tràng là làng nghề gốm nổi tiếng lâu đời và lưu giữ nét văn hóa đặc trưng của Hà Nội.Khi đến đây, du khách sẽ được tận mắt quy trình làm ra những sản phẩm gốm. Ngoài ra, bạn cũng có thể chọn mua được nhiều mặt hàng được làm từ gốm để mang về làm kỷ niệm.'
            ],
            [
                'name'     => 'Thiên Đường Bảo Sơn',
                'address'  => 'Hà Nội',
                'content'  => 'Thiên Đường Bảo Sơn là địa điểm du lịch gần Hà Nội hấp dẫn dành cho những người đến với Hà Nội. Thiên Đường Bảo Sơn có khung cảnh đẹp để bạn có thể tham quan, thư giãn sau những ngày làm việc, học tập mệt mỏi.Ngoài ta, tại Thiên Đường Bảo Sơn có rất nhiều trò vui chơi hấp dẫn như: thủy cung, khu safari, công viên nước… rất thích hợp với những gia đình hoặc những nhóm bạn cùng tụ tập với nhau khám phá và trải nghiệm.'
            ],
            [
                'name'     => 'Cầu Long Biên',
                'address'  => 'Hà Nội',
                'content'  => 'Cầu Long Biên cũng là điểm tham quan hấp dẫn dành cho những khách du lịch. Cầu Long Biên đã có lịch sử lâu đời, cầu mang một nét cổ xưa. Khi đến cầu Long Biên, du khách có thể ngắm nhìn những dòng xe nối đuôi nhau di chuyển để cảm nhận được nhịp sống của Hà Nội.Với khung cảnh đẹp, du khách cũng có thể thoải mái chụp cho mình những bức ảnh lưu niệm tại đây. Ngoài ra thì từ cầu Long Biên, du khách cũng có thể đi xuống tham quan bãi giữa sông Hồng.'
            ],
            [
                'name'     => 'Bãi Sao',
                'address'  => 'Ấp Bãi Sao, thị trấn An Thới, huyện Phú Quốc, tỉnh Kiên Giang',
                'content'  => 'Bãi Sao thuộc phía Nam đảo Phú Quốc. Nơi đây được mệnh danh là bãi biển quyến rũ nhất Phú Quốc.'
            ],
            [
                'name'     => 'Bãi Trường',
                'address'  => 'Xã Dương Tơ, Huyện Phú Quốc, Tỉnh Kiên Giang',
                'content'  => 'Bãi biển dài nhất Phú Quốc với chiều dài lên đến 20km. Bãi Trường là nơi nuôi cấy ngọc trai duy nhất tại Phú Quốc. Môi trường nước thuận lợi. Khi ghé thăm Bãi Trường, bạn có thể tắm biển, lặn ngắm san hô, ngắm hoàng hôn và thưởng thức những món ăn hải sản tươi sống hấp dẫn.'
            ],
            [
                'name'     => 'Hòn Móng tay',
                'address'  => 'Xã Dương Hòa, huyện Kiên Lương, phía Nam đảo Phú Quốc, tỉnh Kiên Giang',
                'content'  => 'Trải qua bao thăng trầm của cuộc sống, Hòn Móng tay vẫn giữ được nét đẹp tự nhiên vốn có của mình. Đây chính là điểm nhấn ấn tượng thu hút rất nhiều khách du lịch ghé thăm. Bên cạnh đó, Hòn Móng tay còn thuộc top 5 Hòn đẹp nhất tại Phú Quốc. Với làn nước xanh ngắt, nhìn thấy cả màu sắc của những rạn san hô lấp ló dưới biển. Ngoài ra, trên đảo còn có một loại cây gọi là sơn hải tùng (cây móng tay) rất đáng để bạn chiêm ngưỡng.'
            ],
            [
                'name'     => 'Núi Hàm Lợn',
                'address'  => 'Sóc Sơn, Hà Nội',
                'content'  => 'Nơi đây có cảnh quan đẹp, không khí trong lành, yên bình thích hợp với những buổi dã ngoại hay cắm trại của những gia đình hoặc nhóm bạn bè. Ngoài ra tại đây cũng có địa hình đa dạng, khí hậu dễ chịu thích hợp là nơi nghỉ ngơi vui chơi và thư giãn của du khách trong chuyến tham quan du lịch của mình.'
            ],
            [
                'name'     => 'Bà Nà Hills',
                'address'  => 'Đà Nẵng',
                'content'  => "Nằm ở độ cao 1.487 mét so với mực nước biển, khu du lịch Bà Nà Hills mở ra “khung trời Châu Âu giữa lòng phố thị”. Nơi đây là điểm đến yêu thích của các tín đồ Instagram, khi quy tụ hàng loạt toạ độ sống ảo đẹp lung linh. Kể “sương sương” thôi thì đã có Cầu Vàng, công trình từng được Tạp chí Time bình chọn là 1 trong 100 điểm đến hàng đầu thế giới, Làng Pháp, Vườn Hoa Le Jardin D'Amour, Bảo Tàng Tượng Sáp và Hầm Rượu Debay."
            ],
            [
                'name'     => 'Bán Đảo Sơn Trà',
                'address'  => 'Đà Nẵng',
                'content'  => 'Có biệt danh “nàng tiên xanh”, Bán Đảo Sơn Trà rộng đến 3.439 héc-ta -  sở hữu khí hậu quanh năm mát mẻ và hệ sinh thái động thực vật đa dạng bậc nhất Đà Nẵng'
            ],
            [
                'name'     => 'Bảo Tàng Tranh 3D Art in Paradise',
                'address'  => 'Đà Nẵng',
                'content'  => 'Check-in đẹp và độc đơn giản hơn bạn nghĩ! Toạ lạc trên đường Trần Nhân Tông, Thọ Quang, Sơn Trà, thành phố Đà Nẵng chính là Bảo Tàng 3D Art in Paradise - kho báu nghệ thuật đa chiều có quy mô hàng đầu Việt Nam. Nơi đây trưng bày trên dưới 130 tác phẩm tranh 3D được thực hiện bởi nhiều nghệ sĩ tài hoa đến từ xứ sở Kim Chi - tạo thành không gian “ lung linh ảo diệu” và phông nền hoàn hảo cho bức ảnh “nghìn likes” trên Instagram'
            ]
        ]);
    }
}
