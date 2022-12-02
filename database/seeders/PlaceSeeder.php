<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'content'  => 'Một trong những địa điểm du lịch gần Hà Nội mà bất kỳ du khách nào cũng nên đến khi đến với thủ đô đó chính là Hồ Gươm. Hồ Gươm nằm ngay ở trung tâm thành phố Hà Nội, đây được coi như một biểu tượng của thủ đô.Khi đến với Hồ Gươm, du khách sẽ được ngắm nhìn mặt hồ xanh mướt, mát mẻ với Tháp Rùa. Bạn có thể tự do tản bộ trên con đường xung quanh hồ để ngắm cảnh thủ đô. Hoặc bạn cũng có thể mua vé để qua cầu Thê Húc vào thăm đền Ngọc Sơn.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Làng gốm Bát Tràng',
                'address'  => 'Hà Nội',
                'content'  => 'Làng gốm Bát Tràng cũng là một trong những điểm du lịch thu hút được nhiều khách du lịch ghé thăm khi đến Hà Nội. Làng gốm Bát Tràng là làng nghề gốm nổi tiếng lâu đời và lưu giữ nét văn hóa đặc trưng của Hà Nội.Khi đến đây, du khách sẽ được tận mắt quy trình làm ra những sản phẩm gốm. Ngoài ra, bạn cũng có thể chọn mua được nhiều mặt hàng được làm từ gốm để mang về làm kỷ niệm.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Thiên Đường Bảo Sơn',
                'address'  => 'Hà Nội',
                'content'  => 'Thiên Đường Bảo Sơn là địa điểm du lịch gần Hà Nội hấp dẫn dành cho những người đến với Hà Nội. Thiên Đường Bảo Sơn có khung cảnh đẹp để bạn có thể tham quan, thư giãn sau những ngày làm việc, học tập mệt mỏi.Ngoài ta, tại Thiên Đường Bảo Sơn có rất nhiều trò vui chơi hấp dẫn như: thủy cung, khu safari, công viên nước… rất thích hợp với những gia đình hoặc những nhóm bạn cùng tụ tập với nhau khám phá và trải nghiệm.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Cầu Long Biên',
                'address'  => 'Hà Nội',
                'content'  => 'Cầu Long Biên cũng là điểm tham quan hấp dẫn dành cho những khách du lịch. Cầu Long Biên đã có lịch sử lâu đời, cầu mang một nét cổ xưa. Khi đến cầu Long Biên, du khách có thể ngắm nhìn những dòng xe nối đuôi nhau di chuyển để cảm nhận được nhịp sống của Hà Nội.Với khung cảnh đẹp, du khách cũng có thể thoải mái chụp cho mình những bức ảnh lưu niệm tại đây. Ngoài ra thì từ cầu Long Biên, du khách cũng có thể đi xuống tham quan bãi giữa sông Hồng.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Bãi Sao',
                'address'  => 'Kiên Giang',
                'content'  => 'Bãi Sao thuộc phía Nam đảo Phú Quốc. Nơi đây được mệnh danh là bãi biển quyến rũ nhất Phú Quốc.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Bãi Trường',
                'address'  => 'Kiên Giang',
                'content'  => 'Bãi biển dài nhất Phú Quốc với chiều dài lên đến 20km. Bãi Trường là nơi nuôi cấy ngọc trai duy nhất tại Phú Quốc. Môi trường nước thuận lợi. Khi ghé thăm Bãi Trường, bạn có thể tắm biển, lặn ngắm san hô, ngắm hoàng hôn và thưởng thức những món ăn hải sản tươi sống hấp dẫn.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Hòn Móng tay',
                'address'  => 'Kiên Giang',
                'content'  => 'Trải qua bao thăng trầm của cuộc sống, Hòn Móng tay vẫn giữ được nét đẹp tự nhiên vốn có của mình. Đây chính là điểm nhấn ấn tượng thu hút rất nhiều khách du lịch ghé thăm. Bên cạnh đó, Hòn Móng tay còn thuộc top 5 Hòn đẹp nhất tại Phú Quốc. Với làn nước xanh ngắt, nhìn thấy cả màu sắc của những rạn san hô lấp ló dưới biển. Ngoài ra, trên đảo còn có một loại cây gọi là sơn hải tùng (cây móng tay) rất đáng để bạn chiêm ngưỡng.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Núi Hàm Lợn',
                'address'  => 'Hà Nội',
                'content'  => 'Nơi đây có cảnh quan đẹp, không khí trong lành, yên bình thích hợp với những buổi dã ngoại hay cắm trại của những gia đình hoặc nhóm bạn bè. Ngoài ra tại đây cũng có địa hình đa dạng, khí hậu dễ chịu thích hợp là nơi nghỉ ngơi vui chơi và thư giãn của du khách trong chuyến tham quan du lịch của mình.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Bà Nà Hills',
                'address'  => 'Đà Nẵng',
                'content'  => "Nằm ở độ cao 1.487 mét so với mực nước biển, khu du lịch Bà Nà Hills mở ra “khung trời Châu Âu giữa lòng phố thị”. Nơi đây là điểm đến yêu thích của các tín đồ Instagram, khi quy tụ hàng loạt toạ độ sống ảo đẹp lung linh. Kể “sương sương” thôi thì đã có Cầu Vàng, công trình từng được Tạp chí Time bình chọn là 1 trong 100 điểm đến hàng đầu thế giới, Làng Pháp, Vườn Hoa Le Jardin D'Amour, Bảo Tàng Tượng Sáp và Hầm Rượu Debay.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Bán Đảo Sơn Trà',
                'address'  => 'Đà Nẵng',
                'content'  => 'Có biệt danh “nàng tiên xanh”, Bán Đảo Sơn Trà rộng đến 3.439 héc-ta -  sở hữu khí hậu quanh năm mát mẻ và hệ sinh thái động thực vật đa dạng bậc nhất Đà Nẵng',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Bảo Tàng Tranh 3D Art in Paradise',
                'address'  => 'Đà Nẵng',
                'content'  => 'Check-in đẹp và độc đơn giản hơn bạn nghĩ! Toạ lạc trên đường Trần Nhân Tông, Thọ Quang, Sơn Trà, thành phố Đà Nẵng chính là Bảo Tàng 3D Art in Paradise - kho báu nghệ thuật đa chiều có quy mô hàng đầu Việt Nam. Nơi đây trưng bày trên dưới 130 tác phẩm tranh 3D được thực hiện bởi nhiều nghệ sĩ tài hoa đến từ xứ sở Kim Chi - tạo thành không gian “ lung linh ảo diệu” và phông nền hoàn hảo cho bức ảnh “nghìn likes” trên Instagram',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Rừng tràm Trà Sư',
                'address'  => 'An Giang',
                'content'  => 'Đây là khu rừng tràm đẹp nhất và nổi tiếng nhất Việt Nam, với sinh cảnh tự nhiên rộng lớn của vùng đồng bằng sông Cửu Long. Đặc biệt, vào mùa nước nổi, hãy đến rừng tràm Trà Sư để tận hưởng vẻ đẹp độc đáo thông qua chuyến đi thuyền theo con nước len lỏi vào rừng xanh. Từ đài quan sát cao 30m trong khuôn viên khu du lịch, bạn có thể chiêm ngưỡng toàn cảnh bức tranh rừng tràm mênh mông bằng kính viễn vọng.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Núi Thị Vải',
                'address'  => 'Bà Rịa - Vũng Tàu',
                'content'  => 'Đi từ Quốc lộ 51 đến thị trấn Phú Mỹ, bạn muốn đến núi Thị Vải thì rẽ trái khoảng 3 km để chạy theo đường mòn đến chân núi. Bạn có thể gửi xe ở nhà dân dưới chân núi và bắt đầu hành trình đi bộ trên những bậc thang được xây bằng đá hoa cương dẫn lên núi. Nơi đây còn có ba ngôi chùa chính là chùa Linh Sơn Liên Trì (chùa Hạ), chùa Linh Sơn Hồng Phúc (chùa Trung), và Linh Sơn Bửu Thiền (chùa Thượng).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Núi Dinh',
                'address'  => 'Bà Rịa - Vũng Tàu',
                'content'  => 'Núi Dinh cách thành phố Bà Rịa khoảng 6 km, về hướng Bắc thuộc huyện Tân Thành. Núi có đỉnh cao 504 mét, với nhiều cảnh đẹp, chùa, am độc đáo nhất của tỉnh Bà Rịa - Vũng Tàu. Từ Quốc lộ 51 nhìn lên, núi trông như con voi khổng lồ nằm phủ phục, đầu quay về hướng biển. Bạn có thể chạy xe máy khoảng 10 phút là lên đến đỉnh.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Chùa Xiêm Cán',
                'address'  => 'Bạc Liêu',
                'content'  => 'Chùa Xiêm Cán là điểm du lịch tâm linh nổi tiếng của Bạc Liêu. Vào những dịp lễ hội lớn như Chol Chnam Thmay (mừng năm mới), Sêne Đôlta (cúng ông bà), Ok Om Bok (cúng trăng), chùa thu hút đông đảo du khách nhất.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Khu di tích thắng cảnh Suối Mỡ',
                'address'  => 'Bắc Giang',
                'content'  => 'Khu di tích thắng cảnh Suối Mỡ được coi như là một trong những địa điểm du lịch nổi tiếng nhất của Bắc Giang. Suối Mỡ là một con suối nhỏ, bắt nguồn từ khu núi Hồ Bắc với độ cao 600m rồi chảy qua các vách đá Hố Chuối của hai ngọn núi Tay Ngai và Bà Bô. Nơi đây có nhiều khung cảnh đẹp vừa hùng vĩ vừa thơ mộng. Xứng đáng là một địa điểm đầu tiên khi bạn ghé thăm Bắc Giang nhé.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Hồ Ba Bể',
                'address'  => 'Bắc Kạn',
                'content'  => 'Nhắc đến các địa điểm du lịch Bắc Kạn, hồ Ba Bể luôn nằm trong danh sách những tọa độ phải check-in. Nằm tại “trái tim” của vườn quốc gia cùng tên, hồ Ba Bể được hình thành cách đây gần 200 triệu năm và hợp thành bởi 3 hồ nước (Pé Lầm, Pé Lèng và Pé Lù).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Động Puông',
                'address'  => 'Bắc Kạn',
                'content'  => 'Nầm bên dòng sông Năng lặng lẽ, Động Puông là địa điểm check - in ở Bắc Kạn khiến bao tín đồ xê dịch say đắm. Nơi này được hình thành nhờ dòng chảy của sông Năng qua lòng núi đá vôi Lũng Nham. Vì vậy, hang động tự nhiên này có rất nhiều khối thạch nhũ hình dáng độc đáo chạy dọc theo đoạn sông dài khoảng 300m.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Chợ nổi Cà Mau',
                'address'  => 'Cà Mau',
                'content'  => 'Chợ nổi Cà Mau nằm trên sông gành Hào, thuộc địa bàn phường 8 của trung tâm Cà Mau. Những trải nghiệm bạn nên thử khi đi chợ nổi Cà Mau như lênh đênh trên sông nước nghe câu hò điệu lý của người dân và hòa mình vào cuộc sống bận rộn, tập lập của họ hay thưởng thức trái cây miệt vườn cùng các đặc sản khác như hủ tiếu… ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Hòn Đá Bạc',
                'address'  => 'Cà Mau',
                'content'  => 'Hòn Đá Bạc là một hòn đảo cách thành phố Cà Mau 50 km theo đường thủy. hiện nay Hòn Đá Bạc thu hút nhiều khách du lịch lui tới bởi vẻ đẹp hoang sơ và kỳ thú. Cây cầu nối các hòn đảo để việc di chuyển được dễ dàng, bước trên cây cầu, bạn đã như lạc vào chốn bồng lai tiên cảnh.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'thác Đá Hàn',
                'address'  => 'Đồng Nai',
                'content'  => 'Địa điểm du lịch Đồng Nai đầu tiên phải kể đến đó chính là Thác Đá Hàn. Cách trung tâm Sài Gòn khoảng 70km, Thác Đá Hàn được thiên nhiên ưu đãi với không gian thoáng đãng, khung cảnh đa dạng. Khi đến đây, bạn cảm nhận rõ ràng không khí trong lành, mát mẻ.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Hồ T’Nưng',
                'address'  => 'Gia Lai',
                'content'  => 'Hồ T’Nưng nổi tiếng được mọi người biết đến qua câu hát: “Không dám nhìn vào đôi mắt ấy…Đôi mắt Pleiku Biển Hồ đầy”. Đúng vậy, Biển Hồ ở đây chính là tên gọi khác của hồ T’Nưng – một trong những hồ tự nhiên đẹp nhất tỉnh Gia Lai.Nguồn gốc của hồ T’Nưng là miệng của ngọn núi lửa đã ngưng hoạt động từ hàng triệu năm về trước. Người dân gọi với cái tên Biển Hồ vì nó có diện tích rất rộng, khoảng hơn 220ha, khi gió to còn mang theo sóng lớn như ngoài đại dương.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Cột cờ Lũng Cú ',
                'address'  => 'Hà Giang',
                'content'  => 'Lũng Cú được ví như ‘điểm đặt bút vẽ bản đồ Việt Nam’ bằng Cột Cờ Lũng Cú. Công trình này được mô phỏng theo cột cờ Hà Nội như minh chứng của niềm tự hào dân tộc, 54 dân tộc anh em luôn đoàn kết.Đây chính là điểm đến đầu tiên mà ai đi Hà Giang cũng muốn đến để cảm nhận ‘dòng chảy Tổ Quốc’ trong tim mình, được mặc chiếc áo đỏ sao vàng và chụp cùng lá cờ đỏ tung băng nơi địa đầu Tổ Quốc. Càng lên mỗi bậc thang dẫn lên đỉnh cột cờ, cảm xúc du khách sẽ càng như vỡ òa với cảnh núi non, ruộng đồng bát ngát chốn vùng cao này.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Cao nguyên đá Đồng Văn ',
                'address'  => 'Hà Giang',
                'content'  => 'Cao nguyên đá Đồng Văn được ví như ‘thiên đường màu xám’ giữa núi cao, hiểm trở, ở độ cao 1500m so với mực nước biển. Cao nguyên đá này trải dài trên khu vực hành chính của 4 huyện Yên Minh, Quản Bạ, Đồng Văn, Mèo Vạc. Chính bởi đặc điểm kiến tạo đặc biệt, nơi đây được công nhận là Công viên địa chất Đồng Văn.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Đảo Cò Chi Lăng',
                'address'  => 'Hải Dương',
                'content'  => 'Đảo Cò Chi Lăng nằm ngay giữa lòng hồ An Dương rộng lớn, là nơi sinh sống của nhiều loài chim khác nhau trong đó tiêu biểu nhất là cò, vạc. Đến đây, bạn sẽ được tận mắt nhìn thấy từng đàn chim bay lượn ngay trước mắt, thu hẹp khoảng cách giữa con người và thế giới tự nhiên lại. Đó sẽ là một trải nghiệm vô cùng đắt giá đấy.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Hồ Bạch Đằng',
                'address'  => 'Hải Dương',
                'content'  => 'Nằm ngay trung tâm thành phố Hải Dương, đây là địa điểm đi dạo, tập thể dục vui chơi của người dân địa phương mỗi ngày. Hơn nữa, nếu có thời gian, bạn có thể ngắm nhìn hoàng hôn, khoảnh khắc khi mặt trời từ từ lặn xuống sẽ vô cùng lãng mạn. Xung quanh hồ cũng có nhiều hoạt động vui chơi, hàng quán để bạn có thể ghé vào và ngắm nhìn nhịp sống vui tươi của thành phố.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Chùa Côn Sơn',
                'address'  => 'Hải Dương',
                'content'  => 'Chùa Côn Sơn nằm trong quần thể di tích Côn Sơn - Kiếp Bạc ngay dưới chân ngọn núi cùng tên. Tương truyền, đây là địa điểm đã diễn ra ra cuộc chiến dẹp loạn 12 sứ quân của Đinh Bộ Lĩnh khi xưa. Trải qua nhiều biến cố lịch sử, chùa nay đã có quy mô nhỏ hơn so với ngày trước, song vẫn giữ được những nét kiến trúc nguyên bản độc đáo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Đảo Robinson Nha Trang ',
                'address'  => 'Khánh Hòa',
                'content'  => 'Đảo Robinson Nha Trang được xem là một trong những vùng biển đẹp nhất tại Khánh Hòa. Nơi đây sở hữu biển xanh trong vắt, bãi cát trắng hoang sơ, tuyệt đẹp. Đến với hòn đảo này, du khách sẽ được thưởng thức tiệc rượu trên biển, trải nghiệm chèo thuyền kayak, tắm biển, ngắm hoàng hôn và thư giãn… ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Đèo Ô Quy Hồ',
                'address'  => 'Lai Châu',
                'content'  => 'Cung đường đèo dài gần 50km, trong đó 2/3 con đường thuộc địa phận huyện Tam Đường - Lai Châu, 1/3 còn lại nằm ở phía Sa Pa - Lào Cai. Vượt qua cổng Vườn Quốc gia Hoàng Liên chừng vài cây số là tới đỉnh đèo Ô Quy Hồ, đây cũng chính là điểm ranh giới giữa hai tỉnh miền núi phía Bắc Lào Cai và Lai Châu, uốn lượn quanh dãy núi Hoàng Liên, nơi có đỉnh Phanxipan - nóc nhà Đông Dương lộng gió trên đỉnh cao 3.414m. Đèo Ô Quy Hồ từ lâu đã nổi tiếng không chỉ vì vị trí giao thông quan trọng mà còn bởi vẻ đẹp hùng vĩ bậc nhất Tây Bắc.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Cao nguyên Sìn Hồ',
                'address'  => 'Lai Châu',
                'content'  => 'Cách trung tâm thành phố Lai Châu khoảng 60km, cao nguyên Sìn Hồ nằm trên độ cao hơn 1500m. Được xem như Sa Pa thứ hai của khu vực Tây Bắc, thời tiết trong ngày ở đây mang đặc điểm của 4 mùa trong năm, nhiệt độ trung bình năm khoảng 18 độ C. Với khí hậu quanh năm mát mẻ cao nguyên Sìn Hồ rất thích hợp cho các loại cây dược liệu như: tam thất, táo mèo, astiso, cây tắm lá thuốc…cùng nhiều giống rau, hoa quả ôn đới đặc sắc như mận, đào, lê…phát triển.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Biển Cửa Lò',
                'address'  => 'Nghệ An',
                'content'  => 'Biển Cửa Lò là một trong những bãi biển nổi tiếng nhất tại Nghệ An. Nơi đây có thể xem là “bãi biển quốc dân” của người dân Bắc Trung Bộ bởi mỗi khi hè đến với lượng khách du lịch đổ về vô cùng đông. Biển Cửa Lò cũng là một địa điểm check-in lý tưởng để bạn cho ra đời những chiếc ảnh đi biển xinh lung linh. Bạn có thể thoải mái tạo dáng bên bờ biển, trên những cồn cát, “bắt” được khoảnh khắc siêu đẹp, siêu lãng mạn khi đạp xe đạp đôi dạo quanh con đường sát biển hay những khu vực mọc nhiều cây thông xanh mát. ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Vườn Quốc gia Cúc Phương',
                'address'  => 'Ninh Bình',
                'content'  => 'Vườn Quốc gia Cúc Phương (hay rừng Cúc Phương) là vườn quốc gia đầu tiên tại Việt Nam, nằm trên địa phận ranh giới 3 khu vực Tây Bắc, châu thổ sông Hồng và Bắc Trung Bộ thuộc ba tỉnh: Ninh Bình, Hòa Bình, Thanh Hóa. Vườn quốc gia này đóng vai trò quan trọng trong việc bảo tồn các loài động vật quý hiếm đang có nguy cơ tuyệt chủng.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Khu du lịch sinh thái Tràng An',
                'address'  => 'Ninh Bình',
                'content'  => 'Nằm cách trung tâm thành phố Ninh Bình 7km về hướng Tây, Tràng An là một trong những địa điểm du lịch Ninh Bình nổi tiếng mà bạn nhất định phải ghé tới. Đây là khu du lịch sinh thái nằm trong Quần thể di sản thế giới Tràng An - nơi bảo tồn và chứa đựng nhiều hệ sinh thái rừng ngập nước, rừng trên núi đá vôi, các di chỉ khảo cổ học và di tích lịch sử văn hóa. Năm 2014, khu du lịch sinh thái Tràng An đã được Chính phủ Việt Nam xếp hạng di tích quốc gia đặc biệt quan trọng và UNESCO công nhận là di sản thế giới kép.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Đền Hùng',
                'address'  => 'Phú Thọ',
                'content'  => 'Đền Hùng là một quần thể du lịch đền chùa nổi tiếng gần xa ở Phú Thọ, được xem là nơi hội tụ những tinh hoa và đặc sắc của dân tộc. Khi đến với Đền Hùng vào dịp Giỗ tổ hàng năm, bạn sẽ được hòa mình vào không khí rộn ràng, náo nhiệt của lễ dâng hương ở đây.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'     => 'Đầm Ô Loan',
                'address'  => 'Phú Yên',
                'content'  => 'Đầm Ô Loan cách thành phố Tuy Hoà 22km, là một điểm đến có tiếng từ lâu ở Phú Yên. Đầm Ô Loan rộng khoảng 1200ha, đứng từ đèo Quán Cau nhìn xuống trông tựa như một con phượng đang xòe cánh vô cùng lộng lẫy. Đầm Ô Loan đẹp nhất trong những khoảnh khắc ngày tàn, khi mà hoàng hôn buông xuống thật lãng mạn, đứng nơi đây nhẹ nhàng ngắm trời đất tối dần là một trải nghiệm bình yên mà bạn không bao giờ có được ở nơi đô thị.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
