<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Upazilas\Upazilas>
 */
class UpazilasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $data =[
//            ["id"=>1,"division_id"=>3,"district_id"=>1,"bn_name"=>"পল্টন থানা","name"=>"Palton Thana"],
//            ["id"=>2,"division_id"=>3,"district_id"=>1,"bn_name"=>"সূত্রাপুর থানা","name"=>"Sutrapur Thana"],
//            ["id"=>3,"division_id"=>3,"district_id"=>1,"bn_name"=>"চকবাজার থানা","name"=>"Chalk Bazar Thana"],
//            ["id"=>4,"division_id"=>3,"district_id"=>1,"bn_name"=>"হাজারীবাগ থানা","name"=>"Hazaribag Thana"],
//            ["id"=>5,"division_id"=>3,"district_id"=>1,"bn_name"=>"লালবাগ থানা","name"=>"Lalbag Thana"],
//            ["id"=>6,"division_id"=>3,"district_id"=>1,"bn_name"=>"কোতোয়ালী থানা ","name"=>"Kutuali Thana"],
//            ["id"=>7,"division_id"=>3,"district_id"=>1,"bn_name"=>"গেন্ডারিয়া থানা","name"=>"Gendaria Thana"],
//            ["id"=>8,"division_id"=>3,"district_id"=>1,"bn_name"=>"যাত্রাবাড়ী থানা","name"=>"Jatrabari Thana"],
//            ["id"=>9,"division_id"=>3,"district_id"=>1,"bn_name"=>"ওয়ারী থানা","name"=>"Wari Thana"],
//            ["id"=>10,"division_id"=>3,"district_id"=>1,"bn_name"=>"বংশাল থানা","name"=>"Bongshal Thana"],
////                ["id"=>92,"division_id"=>3,"district_id"=>1,"bn_name"=>"সূত্রাপুর থানা","name"=>"Sutrapur Thana"],
//            ["id"=>11,"division_id"=>3,"district_id"=>1,"bn_name"=>"শ্যামপুর থানা","name"=>"Sampur Thana"],
//            ["id"=>12,"division_id"=>3,"district_id"=>1,"bn_name"=>"কদমতলী থানা","name"=>"Kadamtoli Thana"],
//            ["id"=>13,"division_id"=>3,"district_id"=>1,"bn_name"=>"মতিঝিল থানা","name"=>"Motijheel Thana"],
//            ["id"=>14,"division_id"=>3,"district_id"=>1,"bn_name"=>"নিউ মার্কেট থানা","name"=>"Newmarket Thana"],
//            ["id"=>15,"division_id"=>3,"district_id"=>1,"bn_name"=>"হাতিরঝিল থানা","name"=>"Hatir Jheel Thana"],
//            ["id"=>16,"division_id"=>3,"district_id"=>1,"bn_name"=>"বনানী থানা","name"=>"Banani Thana"],
//            ["id"=>17,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Palton Thana"],
//            ["id"=>18,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Shahbag Thana"],
//            ["id"=>19,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Cantonment Thana"],
//            ["id"=>20,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Ramna Thana"],
//            ["id"=>21,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Muhammadpur  Thana"],
//            ["id"=>22,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Tejgaon Thana"],
//            ["id"=>23,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Motijheel Thana"],
//            ["id"=>24,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Kasrul Thana"],
//            ["id"=>25,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Sher-E-Banglanagar Thana"],
//            ["id"=>26,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Shahali Thana"],
//            ["id"=>27,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Mirpur Thana"],
//            ["id"=>28,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Badda Thana"],
//            ["id"=>29,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Newmarket Thana"],
//            ["id"=>30,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Hazaribagh Thana"],
//            ["id"=>31,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Uttara West Thana"],
//            ["id"=>32,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Tejgaon Industrial area Thana"],
//            ["id"=>33,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Pallabi Thana"],
//            ["id"=>34,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Gulshan Thana"],
//            ["id"=>35,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Sobujbag Thana"],
//            ["id"=>36,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Khilgaon Thana"],
//            ["id"=>37,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Khilkhet Thana"],
//            ["id"=>38,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Vatara Thana"],
//            ["id"=>39,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Uttarkhan Thana"],
//            ["id"=>40,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Rampura Thana"],
//            ["id"=>41,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Mugda Thana"],
//            ["id"=>42,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Dakshin Khan Thana"],
//            ["id"=>43,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Turag Thana"],
//            ["id"=>44,"division_id"=>3,"district_id"=>1,"bn_name"=>"দোহার উপজেলা","name"=>"Dohar Upazila "],
//            ["id"=>45,"division_id"=>3,"district_id"=>1,"bn_name"=>"সাভার উপজেলা","name"=>"Savar Upazila"],
//            ["id"=>46,"division_id"=>3,"district_id"=>1,"bn_name"=>"ধামরাই উপজেলা","name"=>"Dhamrai Upazila"],
//            ["id"=>47,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Keraniganj Upazila"],
//            ["id"=>48,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Nawabganj Upazila"],
//            ["id"=>49,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Demra Thana"],
//            ["id"=>50,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Jatrabari Thana"],
//            ["id"=>51,"division_id"=>3,"district_id"=>1,"bn_name"=>"Tes","name"=>"Kodomtoli Thana"],
////====================================================================================================================
//
////=================================== Faridpur District ==============================================================
//            ["id"=>52,"division_id"=>3,"district_id"=>2,"bn_name"=>"ফরিদপুর সদর","name"=>"Faridpur Sadar Upazila"],
//            ["id"=>53,"division_id"=>3,"district_id"=>2,"bn_name"=>"শালথা উপজেলা","name"=>"Saltha Upazila"],
//            ["id"=>54,"division_id"=>3,"district_id"=>2,"bn_name"=>"চরভদ্রাসন উপজেলা","name"=>"Charbadrashan Upazila"],
//            ["id"=>55,"division_id"=>3,"district_id"=>2,"bn_name"=>"সদরপুর উপজেলা","name"=>"Sadarpur Upazila"],
//            ["id"=>56,"division_id"=>3,"district_id"=>2,"bn_name"=>"ভাঙ্গা উপজেলা","name"=>"Bhanga Upazila"],
//            ["id"=>57,"division_id"=>3,"district_id"=>2,"bn_name"=>"নগরকান্ড উপজেলা","name"=>"Nagarkanda Upazila"],
//            ["id"=>58,"division_id"=>3,"district_id"=>2,"bn_name"=>"মধুখালি উপজেলা","name"=>"Madukhali Upazila"],
//            ["id"=>59,"division_id"=>3,"district_id"=>2,"bn_name"=>"বোয়ালমারী উপজেলা","name"=>"Boalmari Upazila"],
//            ["id"=>60,"division_id"=>3,"district_id"=>2,"bn_name"=>"আলফাডাঙ্গা উপজেলা","name"=>"Alfadanganga Upazila"],
////======================================================================================================================
//
////=================================== Gazipur District =================================================================
//            ["id"=>61,"division_id"=>3,"district_id"=>3,"bn_name"=>"গাজীপুর সদর উপজেলা","name"=>"Gazipur sadar"],
//            ["id"=>62,"division_id"=>3,"district_id"=>3,"bn_name"=>"কালিগঞ্জ উপজেলা","name"=>"Kaliganj Upazila"],
//            ["id"=>63,"division_id"=>3,"district_id"=>3,"bn_name"=>"কাপাসিয়া উপজেলা","name"=>"Kapasia  Upazila"],
//            ["id"=>64,"division_id"=>3,"district_id"=>3,"bn_name"=>"শ্রীপুর উপজেলা","name"=>"Sreepur Upazila"],
//            ["id"=>65,"division_id"=>3,"district_id"=>3,"bn_name"=>"কালিয়াকৈর উপজেলা","name"=>"Kaliakair  Upazila"],
////======================================================================================================================
//
////=================================== Gopalganj District ===============================================================
//            ["id"=>66,"division_id"=>3,"district_id"=>4,"bn_name"=>"গোপালগঞ্জ সদর উপজেলা","name"=>"Gopalganj Sadar Upazila"],
//            ["id"=>67,"division_id"=>3,"district_id"=>4,"bn_name"=>"কোটালীপাড়া উপজেলা","name"=>"Kotalipara Upazila"],
//            ["id"=>68,"division_id"=>3,"district_id"=>4,"bn_name"=>"টুঙ্গিপাড়া উপজেলা","name"=>"Tungipara Upazila"],
//            ["id"=>69,"division_id"=>3,"district_id"=>4,"bn_name"=>"কাশিয়ানী উপজেলা","name"=>"Kashiani Upazila"],
//            ["id"=>70,"division_id"=>3,"district_id"=>4,"bn_name"=>"মুকসুদপুর উপজেলা","name"=>"Maksudpur Upazila"],
////======================================================================================================================
//
////=================================== Kishoreganj District =============================================================
//            ["id"=>71,"division_id"=>3,"district_id"=>6,"bn_name"=>"কিশোরগঞ্জ সদর উপজেলা","name"=>"Kishoreganj sadar"],
//            ["id"=>72,"division_id"=>3,"district_id"=>6,"bn_name"=>"করিমগঞ্জ উপজেলা","name"=>"Karimganj Upazila"],
//            ["id"=>73,"division_id"=>3,"district_id"=>6,"bn_name"=>"তাড়াইল উপজেলা","name"=>"Tarial Upazila"],
//            ["id"=>74,"division_id"=>3,"district_id"=>6,"bn_name"=>"হোসেনপুর উপজেলা","name"=>"Hossenpur Upazila"],
//            ["id"=>75,"division_id"=>3,"district_id"=>6,"bn_name"=>"পাকুন্দিয়া উপজেলা","name"=>"Pakundia Upazila"],
//            ["id"=>76,"division_id"=>3,"district_id"=>6,"bn_name"=>"কটিয়াদী উপজেলা","name"=>"Katiadi Upazila"],
//            ["id"=>77,"division_id"=>3,"district_id"=>6,"bn_name"=>"বাজিতপুর উপজেলা","name"=>"Bajitpur Upazila"],
//            ["id"=>78,"division_id"=>3,"district_id"=>6,"bn_name"=>"কুলিয়ারচর উপজেলা","name"=>"Kuliarchar Upazila"],
//            ["id"=>79,"division_id"=>3,"district_id"=>6,"bn_name"=>"ভৈরব উপজেলা","name"=>"Bhairab Upazila"],
//            ["id"=>80,"division_id"=>3,"district_id"=>6,"bn_name"=>"নিকলী উপজেলা","name"=>"Nikli Upazila"],
//            ["id"=>81,"division_id"=>3,"district_id"=>6,"bn_name"=>"মিঠামইন উপজেলা","name"=>"Mithamoin Upazila"],
//            ["id"=>82,"division_id"=>3,"district_id"=>6,"bn_name"=>"অষ্টগ্রাম উপজেলা","name"=>"Ostagram Upazila"],
//            ["id"=>83,"division_id"=>3,"district_id"=>6,"bn_name"=>"ইটনা উপজেলা","name"=>"Itna Upazila"],
////======================================================================================================================
//
////=================================== Madaripur District ===============================================================
//            ["id"=>84,"division_id"=>3,"district_id"=>7,"bn_name"=>"মাদারীপুর সদর উপজেলা","name"=>"Madaripur Sadar Upazila"],
//            ["id"=>85,"division_id"=>3,"district_id"=>7,"bn_name"=>"রাজৈর উপজেলা","name"=>"Rajoir Upazila"],
//            ["id"=>86,"division_id"=>3,"district_id"=>7,"bn_name"=>"কালকিনি উপজেলা","name"=>"Kalkini Upazila"],
//            ["id"=>87,"division_id"=>3,"district_id"=>7,"bn_name"=>"শিবচর উপজেলা","name"=>"Shibchar Upazila"],
////======================================================================================================================
//
////=================================== Manikganj District ===============================================================
//            ["id"=>88,"division_id"=>3,"district_id"=>8,"bn_name"=>"মানিকগঞ্জ সদর উপজেলা","name"=>"Manikganj Sadar Upazila"],
//            ["id"=>89,"division_id"=>3,"district_id"=>8,"bn_name"=>"সাটুরিয়া উপজেলা","name"=>"Saturia Upazila"],
//            ["id"=>90,"division_id"=>3,"district_id"=>8,"bn_name"=>"সিংগাইর উপজেলা","name"=>"Singair Upazila"],
//            ["id"=>91,"division_id"=>3,"district_id"=>8,"bn_name"=>"হরিরামপুর উপজেলা","name"=>"Hariampur Upazila"],
//            ["id"=>92,"division_id"=>3,"district_id"=>8,"bn_name"=>"ঘিওর উপজেলা","name"=>"Gheor Upazila"],
//            ["id"=>93,"division_id"=>3,"district_id"=>8,"bn_name"=>"শিবালয় উপজেলা","name"=>"Shibaloy Upazila"],
//            ["id"=>94,"division_id"=>3,"district_id"=>8,"bn_name"=>"দৌলতপুর উপজেলা ","name"=>"Doulatpur"],
////======================================================================================================================
////=================================== Munshiganj District ==============================================================
//            ["id"=>95,"division_id"=>3,"district_id"=>9,"bn_name"=>"মুন্সীগঞ্জ সদর উপজেলা","name"=>"Munshiganj sadar Upazila"],
//            ["id"=>96,"division_id"=>3,"district_id"=>9,"bn_name"=>"গজারিয়া উপজেলা","name"=>"Gajaria Upazila"],
//            ["id"=>97,"division_id"=>3,"district_id"=>9,"bn_name"=>"টংগিবাড়ী উপজেলা","name"=>"Tangibari Upazila"],
//            ["id"=>98,"division_id"=>3,"district_id"=>9,"bn_name"=>"Tes","name"=>"Lohajong Upazila"],
//            ["id"=>99,"division_id"=>3,"district_id"=>9,"bn_name"=>"Tes","name"=>"Sirajdikhan Upazila"],
//            ["id"=>100,"division_id"=>3,"district_id"=>9,"bn_name"=>"Tes","name"=>"Srinagar Upazila"],
////======================================================================================================================
////=================================== Narayanganj District =============================================================
//            ["id"=>101,"division_id"=>3,"district_id"=>11,"bn_name"=>"নারায়নগঞ্জ সদর উপজেলা","name"=>"Narayanganj Sadar Upazila"],
//            ["id"=>102,"division_id"=>3,"district_id"=>11,"bn_name"=>"বন্দর উপজেলা","name"=>"Bandar Upazila"],
//            ["id"=>103,"division_id"=>3,"district_id"=>11,"bn_name"=>"আড়াইহাজার উপজেলা","name"=>"Araihazar Upazila"],
//            ["id"=>104,"division_id"=>3,"district_id"=>11,"bn_name"=>"রূপগঞ্জ উপজেলা","name"=>"Rupganj Upazila"],
//            ["id"=>105,"division_id"=>3,"district_id"=>11,"bn_name"=>"সোনারগাঁ উপজেলা","name"=>"Sonargaon Upazila"],
////======================================================================================================================
////=================================== Narshingdi District ==============================================================
//            ["id"=>106,"division_id"=>3,"district_id"=>12,"bn_name"=>"নরসিংদী সদর উপজেলা","name"=>"Narshingdi Sadar Upazila"],
//            ["id"=>107,"division_id"=>3,"district_id"=>12,"bn_name"=>"শিবপুর উপজেলা","name"=>"Shibpur Upazila"],
//            ["id"=>108,"division_id"=>3,"district_id"=>12,"bn_name"=>"বেলাবো উপজেলা","name"=>"Belabo Upazila"],
//            ["id"=>109,"division_id"=>3,"district_id"=>12,"bn_name"=>"মনোহরদী উপজেলা","name"=>"Monohordi Upazila"],
//            ["id"=>110,"division_id"=>3,"district_id"=>12,"bn_name"=>"পলাশ উপজেলা","name"=>"Palash Upazila"],
//            ["id"=>111,"division_id"=>3,"district_id"=>12,"bn_name"=>"রায়পুরা উপজেলা","name"=>"Raypura Upazila"],
////======================================================================================================================
////=================================== Rajbari District ================================================================
//            ["id"=>112,"division_id"=>3,"district_id"=>14,"bn_name"=>"রাজবাড়ী সদর উপজেলা","name"=>"Rajbari Sadar Upazila"],
//            ["id"=>113,"division_id"=>3,"district_id"=>14,"bn_name"=>"Tes","name"=>"Goalanda Upazila"],
//            ["id"=>114,"division_id"=>3,"district_id"=>14,"bn_name"=>"Tes","name"=>"Pangsha Upazila"],
//            ["id"=>115,"division_id"=>3,"district_id"=>14,"bn_name"=>"Tes","name"=>"Kalukhali Upazila"],
//            ["id"=>116,"division_id"=>3,"district_id"=>14,"bn_name"=>"Tes","name"=>"Baliakandi Upazila"],
////======================================================================================================================
////=================================== Shariatpur District ==============================================================
//            ["id"=>117,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Shariatpur Sadar Upazila"],
//            ["id"=>118,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Jajira Upazila"],
//            ["id"=>119,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Naria Upazila"],
//            ["id"=>120,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Badarganj Upazila"],
//            ["id"=>121,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Badarganj Upazila"],
//            ["id"=>122,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Damudya Upazila"],
//            ["id"=>123,"division_id"=>3,"district_id"=>15,"bn_name"=>"Tes","name"=>"Gosairhat Upazila"],
////======================================================================================================================
////=================================== Tangail District =================================================================
//            ["id"=>124,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Tangail sadar Upazila"],
//            ["id"=>125,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Delduar Upazila"],
//            ["id"=>126,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Basail Upazila"],
//            ["id"=>127,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Nagarpur Upazila"],
//            ["id"=>128,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Mirzapur Upazila"],
//            ["id"=>129,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Sakhipur Upazila"],
//            ["id"=>130,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Bhuapur Upazila"],
//            ["id"=>131,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Kalihati Upazila"],
//            ["id"=>132,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Ghatail Upazila"],
//            ["id"=>133,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Gopalpur Upazila"],
//            ["id"=>134,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Madhupur Upazila"],
//            ["id"=>135,"division_id"=>3,"district_id"=>17,"bn_name"=>"Tes","name"=>"Dhonbari Upazila"],
////======================================================================================================================
////=================================== Bandarban District ==============================================================
//            ["id"=>136,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Bandorban Sadar"],
//            ["id"=>137,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Ruma Upazila "],
//            ["id"=>138,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Thanchi Upazila "],
//            ["id"=>139,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Lama Upazila "],
//            ["id"=>140,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Rowangchari Upazila"],
//            ["id"=>141,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Alikadam Upazila"],
//            ["id"=>142,"division_id"=>2,"district_id"=>40,"bn_name"=>"Tes","name"=>"Naikhyongcharl Upazila"],
////======================================================================================================================
////=================================== Brahmanbaria District ===========================================================
//            ["id"=>143,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Brahmanbaria Sadar Upazila"],
//            ["id"=>144,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Ashuganj Upazila"],
//            ["id"=>145,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Nabinagar Upazila"],
//            ["id"=>146,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Banchharampur Upzia"],
//            ["id"=>147,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Sarail Upzila"],
//            ["id"=>148,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Nasirnagar Upazila"],
//            ["id"=>149,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Akhaura Upazila"],
//            ["id"=>150,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Kasba Upazila"],
//            ["id"=>151,"division_id"=>2,"district_id"=>41,"bn_name"=>"Tes","name"=>"Bijoynagar Upazila"],
////======================================================================================================================
////=================================== Chandpur District ==============================================================
//            ["id"=>152,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Chandpur Sadar Upazila"],
//            ["id"=>153,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Shahrasti Upazila"],
//            ["id"=>154,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Motlob dokkhin Upazila"],
//            ["id"=>155,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Motlob uttor Upazila"],
//            ["id"=>156,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Faridgonj Upazila"],
//            ["id"=>157,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Kachua Upazila"],
//            ["id"=>158,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Haimchar Upazila"],
//            ["id"=>159,"division_id"=>2,"district_id"=>42,"bn_name"=>"Tes","name"=>"Hazigonj Upazila"],
////======================================================================================================================
////=================================== Chattogram District ==============================================================
//            ["id"=>160,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Kotwali Thana"],
//            ["id"=>161,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Double Mooring Thana"],
//            ["id"=>162,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Akbarshah Thana"],
//            ["id"=>163,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Patenga Thana"],
//            ["id"=>164,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Pahartoli Thana"],
//            ["id"=>165,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Bayazid Thana"],
//            ["id"=>166,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Chandgaon Thana"],
//            ["id"=>167,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Halishahar Thana"],
//            ["id"=>168,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Bandar Thana"],
//            ["id"=>169,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"EPZ Thana"],
//            ["id"=>170,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Chawkbazar Thana"],
//            ["id"=>171,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Panchlaaish Thana"],
//            ["id"=>172,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Khulsi Thana"],
//            ["id"=>173,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Karnaphuli Upazila"],
//            ["id"=>174,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Chandanish Upazila"],
//            ["id"=>175,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Patia Upazila"],
//            ["id"=>176,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Anowara Upazila"],
//            ["id"=>177,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Boalkhali Upazila"],
//            ["id"=>178,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Rouzan Upazila"],
//            ["id"=>179,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Hathazari Upizala"],
//            ["id"=>180,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Mirsharai Upazila"],
//            ["id"=>181,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Sitakunda Upazila"],
//            ["id"=>182,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Sandwip Upazila"],
//            ["id"=>183,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Lohagara Upazila"],
//            ["id"=>184,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Satkania Upazila"],
//            ["id"=>185,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Bashkhali Upazila"],
//            ["id"=>186,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Fatikchhari Upazila"],
//            ["id"=>187,"division_id"=>2,"district_id"=>43,"bn_name"=>"Tes","name"=>"Rangunia Upazila"]
////======================================================================================================================
////=================================== Cox's Bazar District =============================================================
////            ["id"=>188,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Cox's Bazar sadar Upazila "],
////            ["id"=>189,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Eidgah Upazila"],
////            ["id"=>190,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Ukhiya Upazila"],
////            ["id"=>191,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Teknaf Upazila"],
////            ["id"=>192,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Kutubdia Upazila"],
////            ["id"=>193,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Ramu Upazila"],
////            ["id"=>194,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Chakaria Upazila"],
////            ["id"=>195,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Pekua Upazila"],
////            ["id"=>196,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Moheskhali Upazila"],
////======================================================================================================================
////=================================== Cumilla District =================================================================
//            ["id"=>188,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Cumilla Sadar South Upazila"],
//            ["id"=>189,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Barura Upazila"],
//            ["id"=>190,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Laksam Upazila"],
//            ["id"=>191,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Nangolkot Upazila"],
//            ["id"=>192,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Lalmai Upazial"],
//            ["id"=>193,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Chouddagram Upazila"],
//            ["id"=>194,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Homna Upazila"],
//            ["id"=>195,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Meghna Upazial"],
//            ["id"=>196,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Titash Upazila"],
//            ["id"=>197,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Daudkandi Upazila"],
//            ["id"=>198,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Burichong Upazila"],
//            ["id"=>199,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Brahmanpara Upazila"],
//            ["id"=>200,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Muradnagar Upazila"],
//            ["id"=>201,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Debidwar UPO"],
//            ["id"=>202,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Monohorgonj Upazila"],
//            ["id"=>203,"division_id"=>2,"district_id"=>44,"bn_name"=>"Tes","name"=>"Chandina Upazila"],
////======================================================================================================================
////=================================== Cox's Bazar District =============================================================
//            ["id"=>204,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Cox's Bazar sadar Upazila "],
//            ["id"=>205,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Eidgah Upazila"],
//            ["id"=>206,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Ukhiya Upazila"],
//            ["id"=>207,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Teknaf Upazila"],
//            ["id"=>208,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Kutubdia Upazila"],
//            ["id"=>209,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Ramu Upazila"],
//            ["id"=>210,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Chakaria Upazila"],
//            ["id"=>211,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Pekua Upazila"],
//            ["id"=>212,"division_id"=>2,"district_id"=>45,"bn_name"=>"Tes","name"=>"Moheskhali Upazila"],
////======================================================================================================================
////=================================== Feni District ===================================================================
//            ["id"=>213,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Feni Sadar Upazila"],
//            ["id"=>214,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Chagalnaia Upazila"],
//            ["id"=>215,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Dagonbhuia Upazila"],
//            ["id"=>216,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Sonagazi Upazila"],
//            ["id"=>217,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Parshuram Upazila"],
//            ["id"=>218,"division_id"=>2,"district_id"=>46,"bn_name"=>"Tes","name"=>"Fulgazi Upazila"],
////======================================================================================================================
////=================================== Khagrachari District =============================================================
//            ["id"=>219,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Khagrachari Sadar"],
//            ["id"=>220,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Panchari Upazila"],
//            ["id"=>221,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Dighinala Upazila"],
//            ["id"=>222,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Mahalchhari Upazila"],
//            ["id"=>223,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Ramgor Upazila"],
//            ["id"=>224,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Guimara Upazila"],
//            ["id"=>225,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Matiranga Upazila"],
//            ["id"=>226,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Manikchari Upazila"],
//            ["id"=>227,"division_id"=>2,"district_id"=>47,"bn_name"=>"Tes","name"=>"Laxmichari Upazila"],
////======================================================================================================================
////=================================== Lakshmipur District ==============================================================
//            ["id"=>228,"division_id"=>2,"district_id"=>48,"bn_name"=>"Tes","name"=>"Lakshmipur Sadar Upazila"],
//            ["id"=>229,"division_id"=>2,"district_id"=>48,"bn_name"=>"Tes","name"=>"Raipur Upazila"],
//            ["id"=>230,"division_id"=>2,"district_id"=>48,"bn_name"=>"Tes","name"=>"Ramganj Upazila"],
//            ["id"=>231,"division_id"=>2,"district_id"=>48,"bn_name"=>"Tes","name"=>"Ramgati Upazila"],
//            ["id"=>232,"division_id"=>2,"district_id"=>48,"bn_name"=>"Tes","name"=>"Kamal nagar Upazila"],
////======================================================================================================================
////=================================== Noakhali District ===============================================================
//            ["id"=>233,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Noakhali Sadar Upazila"],
//            ["id"=>234,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Suborno Upazila"],
//            ["id"=>235,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Hatiya Upazila"],
//            ["id"=>236,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Senbag Upazila"],
//            ["id"=>237,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Begumganj Upazila"],
//            ["id"=>238,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Sonaimuri Upazila"],
//            ["id"=>239,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Kabirhat Upazila"],
//            ["id"=>240,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Chatkhil Upazila"],
//            ["id"=>241,"division_id"=>2,"district_id"=>49,"bn_name"=>"Tes","name"=>"Kompaniganj Upazila"],
////======================================================================================================================
////=================================== Rangamati District ===============================================================
//            ["id"=>242,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Rangamati Sadar Upazila"],
//            ["id"=>243,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Rajsthali Upazila"],
//            ["id"=>244,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Bilaichhori Upazila"],
//            ["id"=>245,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Kawkhali Upazila"],
//            ["id"=>246,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Jurachori Upazila"],
//            ["id"=>247,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Barkal Upazila"],
//            ["id"=>248,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Langadu Upazila"],
//            ["id"=>249,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Baghaichari Upazila"],
//            ["id"=>250,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Kaptai Upazila"],
//            ["id"=>251,"division_id"=>2,"district_id"=>50,"bn_name"=>"Tes","name"=>"Naniarchar Upazila"],
////======================================================================================================================
////=================================== Bagerhat District ================================================================
//            ["id"=>252,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Bagerhat Sadar Upazila"],
//            ["id"=>253,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Chitalmari Upazila"],
//            ["id"=>254,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Fakirhat Upazila"],
//            ["id"=>255,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Mollahat Upazila"],
//            ["id"=>256,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Kachua Upazila"],
//            ["id"=>257,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Rampal Upazila"],
//            ["id"=>258,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Sharankhola Upazila"],
//            ["id"=>259,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Mongla Upazila"],
//            ["id"=>260,"division_id"=>4,"district_id"=>55,"bn_name"=>"Tes","name"=>"Morrelganj Upazila"],
////======================================================================================================================
////=================================== Chuadanga District ===============================================================
//            ["id"=>261,"division_id"=>4,"district_id"=>56,"bn_name"=>"Tes","name"=>"Chuadanga Sadar Upazila"],
//            ["id"=>262,"division_id"=>4,"district_id"=>56,"bn_name"=>"Tes","name"=>"Alamdanga Upazila"],
//            ["id"=>263,"division_id"=>4,"district_id"=>56,"bn_name"=>"Tes","name"=>"Damurhuda Upazila"],
//            ["id"=>264,"division_id"=>4,"district_id"=>56,"bn_name"=>"Tes","name"=>"Jibannagar Upazila"],
////======================================================================================================================
////                ["id"=>265,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Upazila Name"]
////=================================== Jessore District =================================================================
//            ["id"=>266,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Jessore Sadar Upazila"],
//            ["id"=>267,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Chougachha Upazila"],
//            ["id"=>268,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Jhikargachha Upazila"],
//            ["id"=>269,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Sarsa Upazila"],
//            ["id"=>270,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Monirampur Upazila"],
//            ["id"=>271,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Keshobpur Upazila"],
//            ["id"=>272,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Bagharpara Upazila"],
//            ["id"=>273,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Abhaynagar Upazila"],
//            ["id"=>274,"division_id"=>4,"district_id"=>57,"bn_name"=>"Tes","name"=>"Noapara Upazila"],
////======================================================================================================================
////=================================== Jhenaidah District ==============================================================
//            ["id"=>275,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Jhenaidah Sadar Upazila"],
//            ["id"=>276,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Horinakundu Upazila"],
//            ["id"=>277,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Shailakupa Upazila"],
//            ["id"=>278,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Kotchandpur Upazila"],
//            ["id"=>279,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Maheshpur Upazila"],
//            ["id"=>280,"division_id"=>4,"district_id"=>58,"bn_name"=>"Tes","name"=>"Kaliganj Upazila"],
////======================================================================================================================
////=================================== Khulna District ==================================================================
//            ["id"=>281,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Khulna Sadar Thana"],
//            ["id"=>282,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Khalishpur Thana"],
//            ["id"=>283,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Sonadanga Thana"],
//            ["id"=>284,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Doulatpur Thana"],
//            ["id"=>285,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Khanjahan Ail Thana"],
//            ["id"=>286,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Labanchora Thana"],
//            ["id"=>287,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Horintana Thana"],
//            ["id"=>288,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Koyra Upazila"],
//            ["id"=>289,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Dumuria Upazila"],
//            ["id"=>290,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Tarokhada Upazila"],
//            ["id"=>291,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Dacope Upazila"],
//            ["id"=>292,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Digalia  Upazila"],
//            ["id"=>293,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Paikgachha Upazila"],
//            ["id"=>294,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Batiaghata Upazila"],
//            ["id"=>295,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Phultala Upazila"],
//            ["id"=>296,"division_id"=>4,"district_id"=>59,"bn_name"=>"Tes","name"=>"Rupsa Upazila"],
////======================================================================================================================
////=================================== Kushtia District =================================================================
//            ["id"=>297,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Kushtia Sadar Upazila"],
//            ["id"=>298,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Kumarkhali Upazila"],
//            ["id"=>299,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Khoksa Upazila"],
//            ["id"=>300,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Mirpur Upazila"],
//            ["id"=>301,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Bheramara Upazila"],
//            ["id"=>302,"division_id"=>4,"district_id"=>60,"bn_name"=>"Tes","name"=>"Daulatpur Upazila"],
////======================================================================================================================
////=================================== Magura District ==================================================================
//            ["id"=>303,"division_id"=>4,"district_id"=>61,"bn_name"=>"Tes","name"=>"Magura Sadar Upazila"],
//            ["id"=>304,"division_id"=>4,"district_id"=>61,"bn_name"=>"Tes","name"=>"Sreepur Upazila"],
//            ["id"=>305,"division_id"=>4,"district_id"=>61,"bn_name"=>"Tes","name"=>"Shalikha Upazila"],
//            ["id"=>306,"division_id"=>4,"district_id"=>61,"bn_name"=>"Tes","name"=>"Mohammadpur Upazila"],
////======================================================================================================================
////=================================== Meherpur District ===============================================================
//            ["id"=>307,"division_id"=>4,"district_id"=>62,"bn_name"=>"Tes","name"=>"Meherpur Sadar Upazila"],
//            ["id"=>308,"division_id"=>4,"district_id"=>62,"bn_name"=>"Tes","name"=>"Mujibnagar Upazila"],
//            ["id"=>309,"division_id"=>4,"district_id"=>62,"bn_name"=>"Tes","name"=>"Gangni Upazila"],
////======================================================================================================================
////=================================== Narail District ==================================================================
//            ["id"=>310,"division_id"=>4,"district_id"=>63,"bn_name"=>"Tes","name"=>"Narail Sadar Upazila"],
//            ["id"=>311,"division_id"=>4,"district_id"=>63,"bn_name"=>"Tes","name"=>"Lohagara Upazila"],
//            ["id"=>312,"division_id"=>4,"district_id"=>63,"bn_name"=>"Tes","name"=>"Kalia Upazila"],
////======================================================================================================================
////=================================== Satkhira District ===============================================================
//            ["id"=>313,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Satkhira Upazila"],
//            ["id"=>314,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Tala Upazila"],
//            ["id"=>315,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Devhata Upazila"],
//            ["id"=>316,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Kalaroa Upazila"],
//            ["id"=>317,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Kaliganj Upazila"],
//            ["id"=>318,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Shyamnagar Upazila"],
//            ["id"=>319,"division_id"=>4,"district_id"=>64,"bn_name"=>"Tes","name"=>"Ashashuni Upazila"],
////======================================================================================================================
////=================================== Bogra District ===================================================================
//            ["id"=>320,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Bogra Sadar Upazila"],
//            ["id"=>321,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Adomdighi Upazila"],
//            ["id"=>322,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Dhunat Upazila"],
//            ["id"=>323,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Dupchachia Upazila"],
//            ["id"=>324,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Gabtoli Upazila"],
//            ["id"=>325,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Kahalu Upazila"],
//            ["id"=>326,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Nandigram Upazila"],
//            ["id"=>327,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Sariakandi Upazila"],
//            ["id"=>328,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Sherpur Upazila"],
//            ["id"=>329,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Shibgonj Upazila"],
//            ["id"=>330,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Sonatola Upazila"],
//            ["id"=>331,"division_id"=>5,"district_id"=>18,"bn_name"=>"Tes","name"=>"Sajahanpur Upazila"],
////======================================================================================================================
////=================================== Joypurhat District ==============================================================
//            ["id"=>332,"division_id"=>5,"district_id"=>19,"bn_name"=>"Tes","name"=>"Joypurhat Sadar Upazila"],
//            ["id"=>333,"division_id"=>5,"district_id"=>19,"bn_name"=>"Tes","name"=>"Panchbibi Upazila"],
//            ["id"=>334,"division_id"=>5,"district_id"=>19,"bn_name"=>"Tes","name"=>"Kalai Upazila"],
//            ["id"=>335,"division_id"=>5,"district_id"=>19,"bn_name"=>"Tes","name"=>"Khetlal Upazila"],
//            ["id"=>336,"division_id"=>5,"district_id"=>19,"bn_name"=>"Tes","name"=>"Akkelpur Upazila"],
////======================================================================================================================
////=================================== Naogaon District ===============================================================
//            ["id"=>337,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Nogaon Sadar Upazila"],
//            ["id"=>338,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Patnitola Upazila"],
//            ["id"=>339,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Dhamurhat Upazila"],
//            ["id"=>340,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Mohadebpur Upazila"],
//            ["id"=>341,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Porsha Upazila"],
//            ["id"=>342,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Sapahar Upazila"],
//            ["id"=>343,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Badalgachi Upazila"],
//            ["id"=>344,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Manda Upazila"],
//            ["id"=>345,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Niamotpur Upazila"],
//            ["id"=>346,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Atrai Upazila"],
//            ["id"=>347,"division_id"=>5,"district_id"=>20,"bn_name"=>"Tes","name"=>"Raninagar Upazila"],
////======================================================================================================================
////=================================== Natore District ==================================================================
//            ["id"=>348,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Natore Sadar Upazila"],
//            ["id"=>349,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Bagatipara Upazila"],
//            ["id"=>350,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Boraigram Upazila"],
//            ["id"=>351,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Gurudaspur Upazila"],
//            ["id"=>352,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Singra Upazila"],
//            ["id"=>353,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Noldanga Upazila"],
//            ["id"=>354,"division_id"=>5,"district_id"=>21,"bn_name"=>"Tes","name"=>"Lalpur Upazila"],
////======================================================================================================================
////                ["id"=>355,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chapai Sadar Upazila"],
////                ["id"=>356,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gamostapur Upazila"],
////                ["id"=>357,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shibganj Upazila"],
////                ["id"=>358,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nachol Upazila"],
////                ["id"=>359,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bholahat Upazila"],
////                ["id"=>360,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Pabna Sadar Upazila"],
////                ["id"=>361,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Atgharia Upazila"],
////                ["id"=>362,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Ishwardi Upazila"],
////                ["id"=>363,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chatmohar Upazila"],
////                ["id"=>364,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Faridpud Upazila"],
////                ["id"=>365,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bera Upazila"],
////                ["id"=>366,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bhangura Upazila"],
////                ["id"=>367,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Santhia Upazila"],
////                ["id"=>368,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sujanagar Upazila"],
////                ["id"=>369,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bagha Upazila"],
////                ["id"=>370,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Puthia Upazila"],
////                ["id"=>371,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Poba Upazila"],
////                ["id"=>372,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Baghmara Upazila"],
////                ["id"=>373,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Durgapur Upazila"],
////                ["id"=>374,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Tanore Upazila"],
////                ["id"=>375,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Charghat Upazila"],
////                ["id"=>376,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Godagari Upazila"],
////                ["id"=>377,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mohonpur Upazila"],
////                ["id"=>378,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"katakhali  Thana"],
////                ["id"=>379,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Motihar Thana"],
////                ["id"=>380,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rajpara Thana"],
////                ["id"=>381,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kashiadanga Thana"],
////                ["id"=>382,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Boalia Thana"],
////                ["id"=>383,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shahmokdum Thana"],
////                ["id"=>384,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chandrima Thana"],
////                ["id"=>385,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sirajganj Sadar Upazila"],
////                ["id"=>386,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Ullapar Upazila"],
////                ["id"=>387,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kazipur  Upazila"],
////                ["id"=>388,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kamar Khanda Upazila"],
////                ["id"=>389,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chouhali  Upazila"],
////                ["id"=>390,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Tarash Upazila"],
////                ["id"=>391,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Belkuchi Upazila"],
////                ["id"=>392,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rayganj Upazila"],
////                ["id"=>393,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shahjadpur  Upazila"],
////                ["id"=>394,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Hobiganj Sadar Upazila"],
////                ["id"=>395,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shaestaganj Upazila"],
////                ["id"=>396,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Madhabpur Upazila"],
////                ["id"=>397,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Lakhai Upazila"],
////                ["id"=>398,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Azmireeganj Upazila"],
////                ["id"=>399,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Baniachang Upazila"],
////                ["id"=>400,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bahubal Upazila"],
////                ["id"=>401,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chunarughat Upazila"],
////                ["id"=>402,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nabiganj Upazila"],
////                ["id"=>403,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Moulvibazar Sadar Upazila"],
////                ["id"=>404,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Baralekha Upazila"],
////                ["id"=>405,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kulaura Upazila"],
////                ["id"=>406,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Juri Upazila"],
////                ["id"=>407,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Srimangal Upazila"],
////                ["id"=>408,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kamalganj Upazila"],
////                ["id"=>409,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rajnagar Upazila"],
////                ["id"=>410,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sunamganj Sadar Upazila"],
////                ["id"=>411,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chatak Upazila"],
////                ["id"=>412,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jagannathpur Upazila"],
////                ["id"=>413,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Tahirpur Upazila"],
////                ["id"=>414,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jamalganj Upazila"],
////                ["id"=>415,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shalla Upazila"],
////                ["id"=>416,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Derai Upazila"],
////                ["id"=>417,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Duarabazar Upazila"],
////                ["id"=>418,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Biswombhorpur Upazila"],
////                ["id"=>419,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Santigonj Upazila"],
////                ["id"=>420,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Moddonagar Upazila"],
////                ["id"=>421,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dormopasha Upazila"],
////                ["id"=>422,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sylhet sadar Upazila"],
////                ["id"=>423,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dakshin Surma Upazila"],
////                ["id"=>424,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Fenchuganj Upazila"],
////                ["id"=>425,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Balaganj Upazila"],
////                ["id"=>426,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Osmani Nagar Upazila"],
////                ["id"=>427,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bishwanath Upazila"],
////                ["id"=>428,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Companiganj Upazila"],
////                ["id"=>429,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Goainghat Upazila"],
////                ["id"=>430,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jaintapur Upazila"],
////                ["id"=>431,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Golapganj  Upazila"],
////                ["id"=>432,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Beanibazar Upazila"],
////                ["id"=>433,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kanaighat Upazila"],
////                ["id"=>434,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Zakigonj Upazila"],
////                ["id"=>435,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Barguna Sadar Upazila"],
////                ["id"=>436,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Amtali  Upazila"],
////                ["id"=>437,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Amtali Upazila"],
////                ["id"=>438,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Taltali Upazila"],
////                ["id"=>439,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Patharghata Upazila"],
////                ["id"=>440,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Patharghata Upazila"],
////                ["id"=>441,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bamna Upazila"],
////                ["id"=>442,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Betagi Upazila"],
////                ["id"=>443,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Betagi Upazila"],
////                ["id"=>444,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Barishal Sadar Upazila"],
////                ["id"=>445,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bakerganj Upazila"],
////                ["id"=>446,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Babuganj Upazila"],
////                ["id"=>447,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Uzirpur Upazila"],
////                ["id"=>448,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gouranadi Upazila"],
////                ["id"=>449,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Agailzhara Upazila"],
////                ["id"=>450,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Muladi Upazila"],
////                ["id"=>451,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Hizla Upazila"],
////                ["id"=>452,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Hizla Upazila"],
////                ["id"=>453,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mahendiganj Upazila"],
////                ["id"=>454,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Banaripara Upazila"],
////                ["id"=>455,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bhola Sadar Upazila"],
////                ["id"=>456,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Doulatkhan Upazila"],
////                ["id"=>457,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Borhanuddin Upazila"],
////                ["id"=>458,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Lalmohan Upazila"],
////                ["id"=>459,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Charfashion Upazila"],
////                ["id"=>460,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Tojumoddin Upazila"],
////                ["id"=>461,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Monpura Upazila"],
////                ["id"=>462,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jhalokathi Sadar Upazila"],
////                ["id"=>463,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rajapur Upazila"],
////                ["id"=>464,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nalchhiti Upazila"],
////                ["id"=>465,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nalchhiti Upazila"],
////                ["id"=>466,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kathalia Upazila"],
////                ["id"=>467,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Patuakhali sadar Upazila"],
////                ["id"=>468,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dumki Upazila"],
////                ["id"=>469,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mirzaganj Upazila"],
////                ["id"=>470,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bauphal Upazila"],
////                ["id"=>471,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dashmina Upazila"],
////                ["id"=>472,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Galachipa Upazila"],
////                ["id"=>473,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rangabali Upazila"],
////                ["id"=>474,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kalapara Upazila"],
////                ["id"=>475,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Pirojpur Sadar Upazila"],
////                ["id"=>476,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Indurkani Upazila"],
////                ["id"=>477,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kaukhali Upazila"],
////                ["id"=>478,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Swarupkathi Upazila"],
////                ["id"=>479,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nasarabad Upazila"],
////                ["id"=>480,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nazirpur Upazila"],
////                ["id"=>481,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bhandaria Upazila"],
////                ["id"=>482,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mathbaria Upazila"],
////                ["id"=>483,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jamalpur Sadar Upazila"],
////                ["id"=>484,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Melandaha Upazila"],
////                ["id"=>485,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Islampur Upazila"],
////                ["id"=>486,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dewanganj Upazila"],
////                ["id"=>487,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Madarganj Upazila"],
////                ["id"=>488,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sarishabari Upazila"],
////                ["id"=>489,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bakshigonj Upazila"],
////                ["id"=>490,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mymensingh sadar Upazila"],
////                ["id"=>491,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Muktagachha Upazila"],
////                ["id"=>492,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Fulbaria Upazila"],
////                ["id"=>493,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Trishal Upazila"],
////                ["id"=>494,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gaforgaon Upazila"],
////                ["id"=>495,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bhaluka Upazila"],
////                ["id"=>496,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Phulpur  Upazila"],
////                ["id"=>497,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Tarakanda Upazila"],
////                ["id"=>498,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Haluaghat Upazila"],
////                ["id"=>499,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gouripur Upazila"],
////                ["id"=>500,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Isshwargonj Upazila"],
////                ["id"=>501,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dhobaura Upazila"],
////                ["id"=>502,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nandail UPO"],
////                ["id"=>503,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Netrakona Sadar Upazila"],
////                ["id"=>504,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Purbadhola Upazila"],
////                ["id"=>505,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Susung Durgapur"],
////                ["id"=>506,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kalmakanda "],
////                ["id"=>507,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Barhatta Upazila"],
////                ["id"=>508,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mohanganj Upazila"],
////                ["id"=>509,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Khaliajuri Upazila"],
////                ["id"=>510,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Atpara Upazila"],
////                ["id"=>511,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kendua Upazila"],
////                ["id"=>512,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Madan Upazila"],
////                ["id"=>513,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sherpur Sadar Upazila"],
////                ["id"=>514,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nalitabari Upazila"],
////                ["id"=>515,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jhinaigati Upazila"],
////                ["id"=>516,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Shribardi Upazila"],
////                ["id"=>517,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nakla Upazila"],
////                ["id"=>518,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dinajpur Thana"],
////                ["id"=>519,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Parbatipur Upazila"],
////                ["id"=>520,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Birampur Upazila"],
////                ["id"=>521,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Birganj Upazila"],
////                ["id"=>522,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Biral Upazila"],
////                ["id"=>523,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bachaganj Upazila"],
////                ["id"=>524,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chrirbandar Upazila"],
////                ["id"=>525,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Phulbari Upazila"],
////                ["id"=>526,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Ghoraghat Upazila"],
////                ["id"=>527,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Hakimpur Upazila"],
////                ["id"=>528,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kaharole Upazila"],
////                ["id"=>529,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Khansama Upazila"],
////                ["id"=>530,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nababganj Upazila"],
////                ["id"=>531,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gaibandha Sadar Upazila"],
////                ["id"=>532,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Phulchari Upazila"],
////                ["id"=>533,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gobindoganj  Upazila"],
////                ["id"=>534,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Palashbsri Upazila"],
////                ["id"=>535,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Saghata Upazila"],
////                ["id"=>536,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Sundarganj Upazila"],
////                ["id"=>537,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Saadullapur Upazila"],
////                ["id"=>538,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kurigram ‍Sadar Upazila"],
////                ["id"=>539,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Bhurungamari Upazila"],
////                ["id"=>540,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Ulipur Upazila"],
////                ["id"=>541,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Chilmari Upazila"],
////                ["id"=>542,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Phulbari Upazila"],
////                ["id"=>543,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rajarhat Upazila"],
////                ["id"=>544,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nageshwari Upazila"],
////                ["id"=>545,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Roumari Upazila"],
////                ["id"=>546,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rajibpur Upazila"],
////                ["id"=>547,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Lalmonirhat Sadar Upazila"],
////                ["id"=>548,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Aditmari Upazila"],
////                ["id"=>549,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Hatibandha Upazila"],
////                ["id"=>550,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kaliganj Upazila"],
////                ["id"=>551,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"patgram Upazila"],
////                ["id"=>552,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Nilphamari ‍Sadar Upazila"],
////                ["id"=>553,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dimla Upazila"],
////                ["id"=>554,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Domar Upazila"],
////                ["id"=>555,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Jaldhaka Upazila"],
////                ["id"=>556,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kishoriganj Upazila"],
////                ["id"=>557,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Syedpur Upazila"],
////                ["id"=>558,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Panchagarh  Upazila"],
////                ["id"=>559,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Boda Upazila"],
////                ["id"=>560,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Dabiganj Upazila"],
////                ["id"=>561,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Atwari Upazila"],
////                ["id"=>562,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Telulia Upazila"],
////                ["id"=>563,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rangpur Sadar Upazila"],
////                ["id"=>564,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Gangachara Upazila"],
////                ["id"=>565,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Badarganj Upazila"],
////                ["id"=>566,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Kaunia Upazila"],
////                ["id"=>567,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Mithapukur Upazila"],
////                ["id"=>568,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Pirganj Upazila"],
////                ["id"=>569,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Pirgacha Upazila"],
////                ["id"=>570,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Taraganj Upazila"],
////                ["id"=>571,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Thakurgaon Upazila"],
////                ["id"=>572,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Baliadangi Upazila"],
////                ["id"=>573,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Horipur Upazila"],
////                ["id"=>574,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Pirganj Upazila"],
////                ["id"=>575,"division_id"=>,"district_id"=>,"bn_name"=>"Tes","name"=>"Rani Sankail Upazila"],;
//        ];
//        return json_decode($data, true);
//        return $data;
        $json_data ='[
        {
            "id": 1,
            "bn_name": "Palton",
            "name": "Palton",
            "slug": "palton",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 2,
            "bn_name": "Sutrapur",
            "name": "Sutrapur",
            "slug": "sutrapur",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 3,
            "bn_name": "Chalk Bazar",
            "name": "Chalk Bazar",
            "slug": "chalk-bazar",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 4,
            "bn_name": "Hazaribag",
            "name": "Hazaribag",
            "slug": "hazaribag",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 5,
            "bn_name": "Lalbag",
            "name": "Lalbag",
            "slug": "lalbag",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 6,
            "bn_name": "Kutuali",
            "name": "Kutuali",
            "slug": "kutuali",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 7,
            "bn_name": "Gendaria",
            "name": "Gendaria",
            "slug": "gendaria",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 8,
            "bn_name": "Jatrabari",
            "name": "Jatrabari",
            "slug": "jatrabari",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 9,
            "bn_name": "Wari",
            "name": "Wari",
            "slug": "wari",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 10,
            "bn_name": "Bongshal",
            "name": "Bongshal",
            "slug": "bongshal",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 11,
            "bn_name": "Sampur",
            "name": "Sampur",
            "slug": "sampur",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 12,
            "bn_name": "Kadamtoli",
            "name": "Kadamtoli",
            "slug": "kadamtoli",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 13,
            "bn_name": "Motijheel",
            "name": "Motijheel",
            "slug": "motijheel",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 14,
            "bn_name": "Newmarket",
            "name": "Newmarket",
            "slug": "newmarket",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 15,
            "bn_name": "Hatir Jheel",
            "name": "Hatir Jheel",
            "slug": "hatir-jheel",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 16,
            "bn_name": "Banani",
            "name": "Banani",
            "slug": "banani",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 17,
            "bn_name": "Shahbag",
            "name": "Shahbag",
            "slug": "shahbag",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 18,
            "bn_name": "Cantonment",
            "name": "Cantonment",
            "slug": "cantonment",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 19,
            "bn_name": "Ramna",
            "name": "Ramna",
            "slug": "ramna",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 20,
            "bn_name": "Muhammadpur ",
            "name": "Muhammadpur ",
            "slug": "muhammadpur",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 21,
            "bn_name": "Tejgaon",
            "name": "Tejgaon",
            "slug": "tejgaon",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 22,
            "bn_name": "Kasrul",
            "name": "Kasrul",
            "slug": "kasrul",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 23,
            "bn_name": "Sher-E-Banglanagar",
            "name": "Sher-E-Banglanagar",
            "slug": "sher-e-banglanagar",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 24,
            "bn_name": "Shahali",
            "name": "Shahali",
            "slug": "shahali",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 25,
            "bn_name": "Mirpur",
            "name": "Mirpur",
            "slug": "mirpur",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 26,
            "bn_name": "Badda",
            "name": "Badda",
            "slug": "badda",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 27,
            "bn_name": "Hazaribagh",
            "name": "Hazaribagh",
            "slug": "hazaribagh",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 28,
            "bn_name": "Uttara West",
            "name": "Uttara West",
            "slug": "uttara-west",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 29,
            "bn_name": "Tejgaon Industrial area",
            "name": "Tejgaon Industrial area",
            "slug": "tejgaon-industrial-area",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 30,
            "bn_name": "Pallabi",
            "name": "Pallabi",
            "slug": "pallabi",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 31,
            "bn_name": "Gulshan",
            "name": "Gulshan",
            "slug": "gulshan",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 32,
            "bn_name": "Sobujbag",
            "name": "Sobujbag",
            "slug": "sobujbag",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 33,
            "bn_name": "Khilgaon",
            "name": "Khilgaon",
            "slug": "khilgaon",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 34,
            "bn_name": "Khilkhet",
            "name": "Khilkhet",
            "slug": "khilkhet",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 35,
            "bn_name": "Vatara",
            "name": "Vatara",
            "slug": "vatara",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 36,
            "bn_name": "Uttarkhan",
            "name": "Uttarkhan",
            "slug": "uttarkhan",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 37,
            "bn_name": "Rampura",
            "name": "Rampura",
            "slug": "rampura",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 38,
            "bn_name": "Mugda",
            "name": "Mugda",
            "slug": "mugda",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 39,
            "bn_name": "Dakshin Khan",
            "name": "Dakshin Khan",
            "slug": "dakshin-khan",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 40,
            "bn_name": "Turag",
            "name": "Turag",
            "slug": "turag",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 41,
            "bn_name": "Dohar",
            "name": "Dohar",
            "slug": "dohar",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 42,
            "bn_name": "Savar",
            "name": "Savar",
            "slug": "savar",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 43,
            "bn_name": "Dhamrai",
            "name": "Dhamrai",
            "slug": "dhamrai",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 44,
            "bn_name": "Keraniganj",
            "name": "Keraniganj",
            "slug": "keraniganj",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 45,
            "bn_name": "Nawabganj",
            "name": "Nawabganj",
            "slug": "nawabganj",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 46,
            "bn_name": "Demra",
            "name": "Demra",
            "slug": "demra",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 47,
            "bn_name": "Kodomtoli",
            "name": "Kodomtoli",
            "slug": "kodomtoli",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 48,
            "bn_name": "Faridpur Sadar",
            "name": "Faridpur Sadar",
            "slug": "faridpur-sadar",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 49,
            "bn_name": "Saltha",
            "name": "Saltha",
            "slug": "saltha",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 50,
            "bn_name": "Charbadrashan",
            "name": "Charbadrashan",
            "slug": "charbadrashan",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 51,
            "bn_name": "Sadarpur",
            "name": "Sadarpur",
            "slug": "sadarpur",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 52,
            "bn_name": "Bhanga",
            "name": "Bhanga",
            "slug": "bhanga",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 53,
            "bn_name": "Nagarkanda",
            "name": "Nagarkanda",
            "slug": "nagarkanda",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 54,
            "bn_name": "Madukhali",
            "name": "Madukhali",
            "slug": "madukhali",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 55,
            "bn_name": "Boalmari",
            "name": "Boalmari",
            "slug": "boalmari",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 56,
            "bn_name": "Alfadanganga",
            "name": "Alfadanganga",
            "slug": "alfadanganga",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 57,
            "bn_name": "Gazipur sadar",
            "name": "Gazipur sadar",
            "slug": "gazipur-sadar",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 58,
            "bn_name": "Kaliganj",
            "name": "Kaliganj",
            "slug": "kaliganj",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 59,
            "bn_name": "Kapasia ",
            "name": "Kapasia ",
            "slug": "kapasia",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 60,
            "bn_name": "Sreepur",
            "name": "Sreepur",
            "slug": "sreepur",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 61,
            "bn_name": "Kaliakair ",
            "name": "Kaliakair ",
            "slug": "kaliakair",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 62,
            "bn_name": "Gopalganj Sadar",
            "name": "Gopalganj Sadar",
            "slug": "gopalganj-sadar",
            "division_id": 1,
            "district_id": 4
        },
        {
            "id": 63,
            "bn_name": "Kotalipara",
            "name": "Kotalipara",
            "slug": "kotalipara",
            "division_id": 1,
            "district_id": 4
        },
        {
            "id": 64,
            "bn_name": "Tungipara",
            "name": "Tungipara",
            "slug": "tungipara",
            "division_id": 1,
            "district_id": 4
        },
        {
            "id": 65,
            "bn_name": "Kashiani",
            "name": "Kashiani",
            "slug": "kashiani",
            "division_id": 1,
            "district_id": 4
        },
        {
            "id": 66,
            "bn_name": "Maksudpur",
            "name": "Maksudpur",
            "slug": "maksudpur",
            "division_id": 1,
            "district_id": 4
        },
        {
            "id": 67,
            "bn_name": "Kishoreganj sadar",
            "name": "Kishoreganj sadar",
            "slug": "kishoreganj-sadar",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 68,
            "bn_name": "Karimganj",
            "name": "Karimganj",
            "slug": "karimganj",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 69,
            "bn_name": "Tarial",
            "name": "Tarial",
            "slug": "tarial",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 70,
            "bn_name": "Hossenpur",
            "name": "Hossenpur",
            "slug": "hossenpur",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 71,
            "bn_name": "Pakundia",
            "name": "Pakundia",
            "slug": "pakundia",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 72,
            "bn_name": "Katiadi",
            "name": "Katiadi",
            "slug": "katiadi",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 73,
            "bn_name": "Bajitpur",
            "name": "Bajitpur",
            "slug": "bajitpur",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 74,
            "bn_name": "Kuliarchar",
            "name": "Kuliarchar",
            "slug": "kuliarchar",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 75,
            "bn_name": "Bhairab",
            "name": "Bhairab",
            "slug": "bhairab",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 76,
            "bn_name": "Nikli",
            "name": "Nikli",
            "slug": "nikli",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 77,
            "bn_name": "Mithamoin",
            "name": "Mithamoin",
            "slug": "mithamoin",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 78,
            "bn_name": "Ostagram",
            "name": "Ostagram",
            "slug": "ostagram",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 79,
            "bn_name": "Itna",
            "name": "Itna",
            "slug": "itna",
            "division_id": 1,
            "district_id": 5
        },
        {
            "id": 80,
            "bn_name": "Madaripur Sadar",
            "name": "Madaripur Sadar",
            "slug": "madaripur-sadar",
            "division_id": 1,
            "district_id": 6
        },
        {
            "id": 81,
            "bn_name": "Rajoir",
            "name": "Rajoir",
            "slug": "rajoir",
            "division_id": 1,
            "district_id": 6
        },
        {
            "id": 82,
            "bn_name": "Kalkini",
            "name": "Kalkini",
            "slug": "kalkini",
            "division_id": 1,
            "district_id": 6
        },
        {
            "id": 83,
            "bn_name": "Shibchar",
            "name": "Shibchar",
            "slug": "shibchar",
            "division_id": 1,
            "district_id": 6
        },
        {
            "id": 84,
            "bn_name": "Manikganj Sadar",
            "name": "Manikganj Sadar",
            "slug": "manikganj-sadar",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 85,
            "bn_name": "Saturia",
            "name": "Saturia",
            "slug": "saturia",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 86,
            "bn_name": "Singair",
            "name": "Singair",
            "slug": "singair",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 87,
            "bn_name": "Hariampur",
            "name": "Hariampur",
            "slug": "hariampur",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 88,
            "bn_name": "Gheor",
            "name": "Gheor",
            "slug": "gheor",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 89,
            "bn_name": "Shibaloy",
            "name": "Shibaloy",
            "slug": "shibaloy",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 90,
            "bn_name": "Doulatpur",
            "name": "Doulatpur",
            "slug": "doulatpur",
            "division_id": 1,
            "district_id": 7
        },
        {
            "id": 91,
            "bn_name": "Munshiganj sadar",
            "name": "Munshiganj sadar",
            "slug": "munshiganj-sadar",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 92,
            "bn_name": "Gajaria",
            "name": "Gajaria",
            "slug": "gajaria",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 93,
            "bn_name": "Tangibari",
            "name": "Tangibari",
            "slug": "tangibari",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 94,
            "bn_name": "Lohajong",
            "name": "Lohajong",
            "slug": "lohajong",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 95,
            "bn_name": "Sirajdikhan",
            "name": "Sirajdikhan",
            "slug": "sirajdikhan",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 96,
            "bn_name": "Srinagar",
            "name": "Srinagar",
            "slug": "srinagar",
            "division_id": 1,
            "district_id": 8
        },
        {
            "id": 97,
            "bn_name": "Narayanganj Sadar",
            "name": "Narayanganj Sadar",
            "slug": "narayanganj-sadar",
            "division_id": 1,
            "district_id": 9
        },
        {
            "id": 98,
            "bn_name": "Bandar",
            "name": "Bandar",
            "slug": "bandar",
            "division_id": 1,
            "district_id": 9
        },
        {
            "id": 99,
            "bn_name": "Araihazar",
            "name": "Araihazar",
            "slug": "araihazar",
            "division_id": 1,
            "district_id": 9
        },
        {
            "id": 100,
            "bn_name": "Rupganj",
            "name": "Rupganj",
            "slug": "rupganj",
            "division_id": 1,
            "district_id": 9
        },
        {
            "id": 101,
            "bn_name": "Sonargaon",
            "name": "Sonargaon",
            "slug": "sonargaon",
            "division_id": 1,
            "district_id": 9
        },
        {
            "id": 102,
            "bn_name": "Narshingdi Sadar",
            "name": "Narshingdi Sadar",
            "slug": "narshingdi-sadar",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 103,
            "bn_name": "Shibpur",
            "name": "Shibpur",
            "slug": "shibpur",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 104,
            "bn_name": "Belabo",
            "name": "Belabo",
            "slug": "belabo",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 105,
            "bn_name": "Monohordi",
            "name": "Monohordi",
            "slug": "monohordi",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 106,
            "bn_name": "Palash",
            "name": "Palash",
            "slug": "palash",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 107,
            "bn_name": "Raypura",
            "name": "Raypura",
            "slug": "raypura",
            "division_id": 1,
            "district_id": 10
        },
        {
            "id": 108,
            "bn_name": "Rajbari Sadar",
            "name": "Rajbari Sadar",
            "slug": "rajbari-sadar",
            "division_id": 1,
            "district_id": 11
        },
        {
            "id": 109,
            "bn_name": "Goalanda",
            "name": "Goalanda",
            "slug": "goalanda",
            "division_id": 1,
            "district_id": 11
        },
        {
            "id": 110,
            "bn_name": "Pangsha",
            "name": "Pangsha",
            "slug": "pangsha",
            "division_id": 1,
            "district_id": 11
        },
        {
            "id": 111,
            "bn_name": "Kalukhali",
            "name": "Kalukhali",
            "slug": "kalukhali",
            "division_id": 1,
            "district_id": 11
        },
        {
            "id": 112,
            "bn_name": "Baliakandi",
            "name": "Baliakandi",
            "slug": "baliakandi",
            "division_id": 1,
            "district_id": 11
        },
        {
            "id": 113,
            "bn_name": "Shariatpur Sadar",
            "name": "Shariatpur Sadar",
            "slug": "shariatpur-sadar",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 114,
            "bn_name": "Jajira",
            "name": "Jajira",
            "slug": "jajira",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 115,
            "bn_name": "Naria",
            "name": "Naria",
            "slug": "naria",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 116,
            "bn_name": "Badarganj",
            "name": "Badarganj",
            "slug": "badarganj",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 117,
            "bn_name": "Damudya",
            "name": "Damudya",
            "slug": "damudya",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 118,
            "bn_name": "Gosairhat",
            "name": "Gosairhat",
            "slug": "gosairhat",
            "division_id": 1,
            "district_id": 12
        },
        {
            "id": 119,
            "bn_name": "Tangail sadar",
            "name": "Tangail sadar",
            "slug": "tangail-sadar",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 120,
            "bn_name": "Delduar",
            "name": "Delduar",
            "slug": "delduar",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 121,
            "bn_name": "Basail",
            "name": "Basail",
            "slug": "basail",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 122,
            "bn_name": "Nagarpur",
            "name": "Nagarpur",
            "slug": "nagarpur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 123,
            "bn_name": "Mirzapur",
            "name": "Mirzapur",
            "slug": "mirzapur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 124,
            "bn_name": "Sakhipur",
            "name": "Sakhipur",
            "slug": "sakhipur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 125,
            "bn_name": "Bhuapur",
            "name": "Bhuapur",
            "slug": "bhuapur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 126,
            "bn_name": "Kalihati",
            "name": "Kalihati",
            "slug": "kalihati",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 127,
            "bn_name": "Ghatail",
            "name": "Ghatail",
            "slug": "ghatail",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 128,
            "bn_name": "Gopalpur",
            "name": "Gopalpur",
            "slug": "gopalpur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 129,
            "bn_name": "Madhupur",
            "name": "Madhupur",
            "slug": "madhupur",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 130,
            "bn_name": "Dhonbari",
            "name": "Dhonbari",
            "slug": "dhonbari",
            "division_id": 1,
            "district_id": 13
        },
        {
            "id": 131,
            "bn_name": "Bandorban Sadar",
            "name": "Bandorban Sadar",
            "slug": "bandorban-sadar",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 132,
            "bn_name": "Ruma",
            "name": "Ruma",
            "slug": "ruma",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 133,
            "bn_name": "Thanchi",
            "name": "Thanchi",
            "slug": "thanchi",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 134,
            "bn_name": "Lama",
            "name": "Lama",
            "slug": "lama",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 135,
            "bn_name": "Rowangchari",
            "name": "Rowangchari",
            "slug": "rowangchari",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 136,
            "bn_name": "Alikadam",
            "name": "Alikadam",
            "slug": "alikadam",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 137,
            "bn_name": "Naikhyongcharl",
            "name": "Naikhyongcharl",
            "slug": "naikhyongcharl",
            "division_id": 2,
            "district_id": 14
        },
        {
            "id": 138,
            "bn_name": "Brahmanbaria Sadar",
            "name": "Brahmanbaria Sadar",
            "slug": "brahmanbaria-sadar",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 139,
            "bn_name": "Ashuganj",
            "name": "Ashuganj",
            "slug": "ashuganj",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 140,
            "bn_name": "Nabinagar",
            "name": "Nabinagar",
            "slug": "nabinagar",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 141,
            "bn_name": "Banchharampur Upzia",
            "name": "Banchharampur Upzia",
            "slug": "banchharampur-upzia",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 142,
            "bn_name": "Sarail Upzila",
            "name": "Sarail Upzila",
            "slug": "sarail-upzila",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 143,
            "bn_name": "Nasirnagar",
            "name": "Nasirnagar",
            "slug": "nasirnagar",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 144,
            "bn_name": "Akhaura",
            "name": "Akhaura",
            "slug": "akhaura",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 145,
            "bn_name": "Kasba",
            "name": "Kasba",
            "slug": "kasba",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 146,
            "bn_name": "Bijoynagar",
            "name": "Bijoynagar",
            "slug": "bijoynagar",
            "division_id": 2,
            "district_id": 15
        },
        {
            "id": 147,
            "bn_name": "Chandpur Sadar",
            "name": "Chandpur Sadar",
            "slug": "chandpur-sadar",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 148,
            "bn_name": "Shahrasti",
            "name": "Shahrasti",
            "slug": "shahrasti",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 149,
            "bn_name": "Motlob dokkhin",
            "name": "Motlob dokkhin",
            "slug": "motlob-dokkhin",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 150,
            "bn_name": "Motlob uttor",
            "name": "Motlob uttor",
            "slug": "motlob-uttor",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 151,
            "bn_name": "Faridgonj",
            "name": "Faridgonj",
            "slug": "faridgonj",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 152,
            "bn_name": "Kachua",
            "name": "Kachua",
            "slug": "kachua",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 153,
            "bn_name": "Haimchar",
            "name": "Haimchar",
            "slug": "haimchar",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 154,
            "bn_name": "Hazigonj",
            "name": "Hazigonj",
            "slug": "hazigonj",
            "division_id": 2,
            "district_id": 16
        },
        {
            "id": 155,
            "bn_name": "Kotwali",
            "name": "Kotwali",
            "slug": "kotwali",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 156,
            "bn_name": "Double Mooring",
            "name": "Double Mooring",
            "slug": "double-mooring",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 157,
            "bn_name": "Akbarshah",
            "name": "Akbarshah",
            "slug": "akbarshah",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 158,
            "bn_name": "Patenga",
            "name": "Patenga",
            "slug": "patenga",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 159,
            "bn_name": "Pahartoli",
            "name": "Pahartoli",
            "slug": "pahartoli",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 160,
            "bn_name": "Bayazid",
            "name": "Bayazid",
            "slug": "bayazid",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 161,
            "bn_name": "Chandgaon",
            "name": "Chandgaon",
            "slug": "chandgaon",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 162,
            "bn_name": "Halishahar",
            "name": "Halishahar",
            "slug": "halishahar",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 163,
            "bn_name": "EPZ",
            "name": "EPZ",
            "slug": "epz",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 164,
            "bn_name": "Chawkbazar",
            "name": "Chawkbazar",
            "slug": "chawkbazar",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 165,
            "bn_name": "Panchlaaish",
            "name": "Panchlaaish",
            "slug": "panchlaaish",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 166,
            "bn_name": "Khulsi",
            "name": "Khulsi",
            "slug": "khulsi",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 167,
            "bn_name": "Karnaphuli",
            "name": "Karnaphuli",
            "slug": "karnaphuli",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 168,
            "bn_name": "Chandanish",
            "name": "Chandanish",
            "slug": "chandanish",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 169,
            "bn_name": "Patia",
            "name": "Patia",
            "slug": "patia",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 170,
            "bn_name": "Anowara",
            "name": "Anowara",
            "slug": "anowara",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 171,
            "bn_name": "Boalkhali",
            "name": "Boalkhali",
            "slug": "boalkhali",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 172,
            "bn_name": "Rouzan",
            "name": "Rouzan",
            "slug": "rouzan",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 173,
            "bn_name": "Hathazari Upizala",
            "name": "Hathazari Upizala",
            "slug": "hathazari-upizala",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 174,
            "bn_name": "Mirsharai",
            "name": "Mirsharai",
            "slug": "mirsharai",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 175,
            "bn_name": "Sitakunda",
            "name": "Sitakunda",
            "slug": "sitakunda",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 176,
            "bn_name": "Sandwip",
            "name": "Sandwip",
            "slug": "sandwip",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 177,
            "bn_name": "Lohagara",
            "name": "Lohagara",
            "slug": "lohagara",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 178,
            "bn_name": "Satkania",
            "name": "Satkania",
            "slug": "satkania",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 179,
            "bn_name": "Bashkhali",
            "name": "Bashkhali",
            "slug": "bashkhali",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 180,
            "bn_name": "Fatikchhari",
            "name": "Fatikchhari",
            "slug": "fatikchhari",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 181,
            "bn_name": "Rangunia",
            "name": "Rangunia",
            "slug": "rangunia",
            "division_id": 2,
            "district_id": 17
        },
        {
            "id": 182,
            "bn_name": "Cumilla Sadar South",
            "name": "Cumilla Sadar South",
            "slug": "cumilla-sadar-south",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 183,
            "bn_name": "Barura",
            "name": "Barura",
            "slug": "barura",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 184,
            "bn_name": "Laksam",
            "name": "Laksam",
            "slug": "laksam",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 185,
            "bn_name": "Nangolkot",
            "name": "Nangolkot",
            "slug": "nangolkot",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 186,
            "bn_name": "Lalmai",
            "name": "Lalmai",
            "slug": "lalmai",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 187,
            "bn_name": "Chouddagram",
            "name": "Chouddagram",
            "slug": "chouddagram",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 188,
            "bn_name": "Homna",
            "name": "Homna",
            "slug": "homna",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 189,
            "bn_name": "Meghna",
            "name": "Meghna",
            "slug": "meghna",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 190,
            "bn_name": "Titash",
            "name": "Titash",
            "slug": "titash",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 191,
            "bn_name": "Daudkandi",
            "name": "Daudkandi",
            "slug": "daudkandi",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 192,
            "bn_name": "Burichong",
            "name": "Burichong",
            "slug": "burichong",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 193,
            "bn_name": "Brahmanpara",
            "name": "Brahmanpara",
            "slug": "brahmanpara",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 194,
            "bn_name": "Muradnagar",
            "name": "Muradnagar",
            "slug": "muradnagar",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 195,
            "bn_name": "Debidwar UPO",
            "name": "Debidwar UPO",
            "slug": "debidwar-upo",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 196,
            "bn_name": "Monohorgonj",
            "name": "Monohorgonj",
            "slug": "monohorgonj",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 197,
            "bn_name": "Chandina",
            "name": "Chandina",
            "slug": "chandina",
            "division_id": 2,
            "district_id": 18
        },
        {
            "id": 198,
            "bn_name": "Cox\'s Bazar sadar",
            "name": "Cox\'s Bazar sadar",
            "slug": "coxs-bazar-sadar",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 199,
            "bn_name": "Eidgah",
            "name": "Eidgah",
            "slug": "eidgah",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 200,
            "bn_name": "Ukhiya",
            "name": "Ukhiya",
            "slug": "ukhiya",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 201,
            "bn_name": "Teknaf",
            "name": "Teknaf",
            "slug": "teknaf",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 202,
            "bn_name": "Kutubdia",
            "name": "Kutubdia",
            "slug": "kutubdia",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 203,
            "bn_name": "Ramu",
            "name": "Ramu",
            "slug": "ramu",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 204,
            "bn_name": "Chakaria",
            "name": "Chakaria",
            "slug": "chakaria",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 205,
            "bn_name": "Pekua",
            "name": "Pekua",
            "slug": "pekua",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 206,
            "bn_name": "Moheskhali",
            "name": "Moheskhali",
            "slug": "moheskhali",
            "division_id": 2,
            "district_id": 19
        },
        {
            "id": 207,
            "bn_name": "Feni Sadar",
            "name": "Feni Sadar",
            "slug": "feni-sadar",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 208,
            "bn_name": "Chagalnaia",
            "name": "Chagalnaia",
            "slug": "chagalnaia",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 209,
            "bn_name": "Dagonbhuia",
            "name": "Dagonbhuia",
            "slug": "dagonbhuia",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 210,
            "bn_name": "Sonagazi",
            "name": "Sonagazi",
            "slug": "sonagazi",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 211,
            "bn_name": "Parshuram",
            "name": "Parshuram",
            "slug": "parshuram",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 212,
            "bn_name": "Fulgazi",
            "name": "Fulgazi",
            "slug": "fulgazi",
            "division_id": 2,
            "district_id": 20
        },
        {
            "id": 213,
            "bn_name": "Khagrachari Sadar",
            "name": "Khagrachari Sadar",
            "slug": "khagrachari-sadar",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 214,
            "bn_name": "Panchari",
            "name": "Panchari",
            "slug": "panchari",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 215,
            "bn_name": "Dighinala",
            "name": "Dighinala",
            "slug": "dighinala",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 216,
            "bn_name": "Mahalchhari",
            "name": "Mahalchhari",
            "slug": "mahalchhari",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 217,
            "bn_name": "Ramgor",
            "name": "Ramgor",
            "slug": "ramgor",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 218,
            "bn_name": "Guimara",
            "name": "Guimara",
            "slug": "guimara",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 219,
            "bn_name": "Matiranga",
            "name": "Matiranga",
            "slug": "matiranga",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 220,
            "bn_name": "Manikchari",
            "name": "Manikchari",
            "slug": "manikchari",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 221,
            "bn_name": "Laxmichari",
            "name": "Laxmichari",
            "slug": "laxmichari",
            "division_id": 2,
            "district_id": 21
        },
        {
            "id": 222,
            "bn_name": "Lakshmipur Sadar",
            "name": "Lakshmipur Sadar",
            "slug": "lakshmipur-sadar",
            "division_id": 2,
            "district_id": 22
        },
        {
            "id": 223,
            "bn_name": "Raipur",
            "name": "Raipur",
            "slug": "raipur",
            "division_id": 2,
            "district_id": 22
        },
        {
            "id": 224,
            "bn_name": "Ramganj",
            "name": "Ramganj",
            "slug": "ramganj",
            "division_id": 2,
            "district_id": 22
        },
        {
            "id": 225,
            "bn_name": "Ramgati",
            "name": "Ramgati",
            "slug": "ramgati",
            "division_id": 2,
            "district_id": 22
        },
        {
            "id": 226,
            "bn_name": "Kamal nagar",
            "name": "Kamal nagar",
            "slug": "kamal-nagar",
            "division_id": 2,
            "district_id": 22
        },
        {
            "id": 227,
            "bn_name": "Noakhali Sadar",
            "name": "Noakhali Sadar",
            "slug": "noakhali-sadar",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 228,
            "bn_name": "Suborno",
            "name": "Suborno",
            "slug": "suborno",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 229,
            "bn_name": "Hatiya",
            "name": "Hatiya",
            "slug": "hatiya",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 230,
            "bn_name": "Senbag",
            "name": "Senbag",
            "slug": "senbag",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 231,
            "bn_name": "Begumganj",
            "name": "Begumganj",
            "slug": "begumganj",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 232,
            "bn_name": "Sonaimuri",
            "name": "Sonaimuri",
            "slug": "sonaimuri",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 233,
            "bn_name": "Kabirhat",
            "name": "Kabirhat",
            "slug": "kabirhat",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 234,
            "bn_name": "Chatkhil",
            "name": "Chatkhil",
            "slug": "chatkhil",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 235,
            "bn_name": "Kompaniganj",
            "name": "Kompaniganj",
            "slug": "kompaniganj",
            "division_id": 2,
            "district_id": 23
        },
        {
            "id": 236,
            "bn_name": "Rangamati Sadar",
            "name": "Rangamati Sadar",
            "slug": "rangamati-sadar",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 237,
            "bn_name": "Rajsthali",
            "name": "Rajsthali",
            "slug": "rajsthali",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 238,
            "bn_name": "Bilaichhori",
            "name": "Bilaichhori",
            "slug": "bilaichhori",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 239,
            "bn_name": "Kawkhali",
            "name": "Kawkhali",
            "slug": "kawkhali",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 240,
            "bn_name": "Jurachori",
            "name": "Jurachori",
            "slug": "jurachori",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 241,
            "bn_name": "Barkal",
            "name": "Barkal",
            "slug": "barkal",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 242,
            "bn_name": "Langadu",
            "name": "Langadu",
            "slug": "langadu",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 243,
            "bn_name": "Baghaichari",
            "name": "Baghaichari",
            "slug": "baghaichari",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 244,
            "bn_name": "Kaptai",
            "name": "Kaptai",
            "slug": "kaptai",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 245,
            "bn_name": "Naniarchar",
            "name": "Naniarchar",
            "slug": "naniarchar",
            "division_id": 2,
            "district_id": 24
        },
        {
            "id": 246,
            "bn_name": "Bagerhat Sadar",
            "name": "Bagerhat Sadar",
            "slug": "bagerhat-sadar",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 247,
            "bn_name": "Chitalmari",
            "name": "Chitalmari",
            "slug": "chitalmari",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 248,
            "bn_name": "Fakirhat",
            "name": "Fakirhat",
            "slug": "fakirhat",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 249,
            "bn_name": "Mollahat",
            "name": "Mollahat",
            "slug": "mollahat",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 250,
            "bn_name": "Rampal",
            "name": "Rampal",
            "slug": "rampal",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 251,
            "bn_name": "Sharankhola",
            "name": "Sharankhola",
            "slug": "sharankhola",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 252,
            "bn_name": "Mongla",
            "name": "Mongla",
            "slug": "mongla",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 253,
            "bn_name": "Morrelganj",
            "name": "Morrelganj",
            "slug": "morrelganj",
            "division_id": 3,
            "district_id": 25
        },
        {
            "id": 254,
            "bn_name": "Chuadanga Sadar",
            "name": "Chuadanga Sadar",
            "slug": "chuadanga-sadar",
            "division_id": 3,
            "district_id": 26
        },
        {
            "id": 255,
            "bn_name": "Alamdanga",
            "name": "Alamdanga",
            "slug": "alamdanga",
            "division_id": 3,
            "district_id": 26
        },
        {
            "id": 256,
            "bn_name": "Damurhuda",
            "name": "Damurhuda",
            "slug": "damurhuda",
            "division_id": 3,
            "district_id": 26
        },
        {
            "id": 257,
            "bn_name": "Jibannagar",
            "name": "Jibannagar",
            "slug": "jibannagar",
            "division_id": 3,
            "district_id": 26
        },
        {
            "id": 258,
            "bn_name": "Jessore Sadar",
            "name": "Jessore Sadar",
            "slug": "jessore-sadar",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 259,
            "bn_name": "Chougachha",
            "name": "Chougachha",
            "slug": "chougachha",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 260,
            "bn_name": "Jhikargachha",
            "name": "Jhikargachha",
            "slug": "jhikargachha",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 261,
            "bn_name": "Sarsa",
            "name": "Sarsa",
            "slug": "sarsa",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 262,
            "bn_name": "Monirampur",
            "name": "Monirampur",
            "slug": "monirampur",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 263,
            "bn_name": "Keshobpur",
            "name": "Keshobpur",
            "slug": "keshobpur",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 264,
            "bn_name": "Bagharpara",
            "name": "Bagharpara",
            "slug": "bagharpara",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 265,
            "bn_name": "Abhaynagar",
            "name": "Abhaynagar",
            "slug": "abhaynagar",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 266,
            "bn_name": "Noapara",
            "name": "Noapara",
            "slug": "noapara",
            "division_id": 3,
            "district_id": 27
        },
        {
            "id": 267,
            "bn_name": "Jhenaidah Sadar",
            "name": "Jhenaidah Sadar",
            "slug": "jhenaidah-sadar",
            "division_id": 3,
            "district_id": 28
        },
        {
            "id": 268,
            "bn_name": "Horinakundu",
            "name": "Horinakundu",
            "slug": "horinakundu",
            "division_id": 3,
            "district_id": 28
        },
        {
            "id": 269,
            "bn_name": "Shailakupa",
            "name": "Shailakupa",
            "slug": "shailakupa",
            "division_id": 3,
            "district_id": 28
        },
        {
            "id": 270,
            "bn_name": "Kotchandpur",
            "name": "Kotchandpur",
            "slug": "kotchandpur",
            "division_id": 3,
            "district_id": 28
        },
        {
            "id": 271,
            "bn_name": "Maheshpur",
            "name": "Maheshpur",
            "slug": "maheshpur",
            "division_id": 3,
            "district_id": 28
        },
        {
            "id": 272,
            "bn_name": "Khulna Sadar",
            "name": "Khulna Sadar",
            "slug": "khulna-sadar",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 273,
            "bn_name": "Khalishpur",
            "name": "Khalishpur",
            "slug": "khalishpur",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 274,
            "bn_name": "Sonadanga",
            "name": "Sonadanga",
            "slug": "sonadanga",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 275,
            "bn_name": "Khanjahan Ail",
            "name": "Khanjahan Ail",
            "slug": "khanjahan-ail",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 276,
            "bn_name": "Labanchora",
            "name": "Labanchora",
            "slug": "labanchora",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 277,
            "bn_name": "Horintana",
            "name": "Horintana",
            "slug": "horintana",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 278,
            "bn_name": "Koyra",
            "name": "Koyra",
            "slug": "koyra",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 279,
            "bn_name": "Dumuria",
            "name": "Dumuria",
            "slug": "dumuria",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 280,
            "bn_name": "Tarokhada",
            "name": "Tarokhada",
            "slug": "tarokhada",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 281,
            "bn_name": "Dacope",
            "name": "Dacope",
            "slug": "dacope",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 282,
            "bn_name": "Digalia ",
            "name": "Digalia ",
            "slug": "digalia",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 283,
            "bn_name": "Paikgachha",
            "name": "Paikgachha",
            "slug": "paikgachha",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 284,
            "bn_name": "Batiaghata",
            "name": "Batiaghata",
            "slug": "batiaghata",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 285,
            "bn_name": "Phultala",
            "name": "Phultala",
            "slug": "phultala",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 286,
            "bn_name": "Rupsa",
            "name": "Rupsa",
            "slug": "rupsa",
            "division_id": 3,
            "district_id": 29
        },
        {
            "id": 287,
            "bn_name": "Kushtia Sadar",
            "name": "Kushtia Sadar",
            "slug": "kushtia-sadar",
            "division_id": 3,
            "district_id": 30
        },
        {
            "id": 288,
            "bn_name": "Kumarkhali",
            "name": "Kumarkhali",
            "slug": "kumarkhali",
            "division_id": 3,
            "district_id": 30
        },
        {
            "id": 289,
            "bn_name": "Khoksa",
            "name": "Khoksa",
            "slug": "khoksa",
            "division_id": 3,
            "district_id": 30
        },
        {
            "id": 290,
            "bn_name": "Bheramara",
            "name": "Bheramara",
            "slug": "bheramara",
            "division_id": 3,
            "district_id": 30
        },
        {
            "id": 291,
            "bn_name": "Daulatpur",
            "name": "Daulatpur",
            "slug": "daulatpur",
            "division_id": 3,
            "district_id": 30
        },
        {
            "id": 292,
            "bn_name": "Magura Sadar",
            "name": "Magura Sadar",
            "slug": "magura-sadar",
            "division_id": 3,
            "district_id": 31
        },
        {
            "id": 293,
            "bn_name": "Shalikha",
            "name": "Shalikha",
            "slug": "shalikha",
            "division_id": 3,
            "district_id": 31
        },
        {
            "id": 294,
            "bn_name": "Mohammadpur",
            "name": "Mohammadpur",
            "slug": "mohammadpur",
            "division_id": 3,
            "district_id": 31
        },
        {
            "id": 295,
            "bn_name": "Meherpur Sadar",
            "name": "Meherpur Sadar",
            "slug": "meherpur-sadar",
            "division_id": 3,
            "district_id": 32
        },
        {
            "id": 296,
            "bn_name": "Mujibnagar",
            "name": "Mujibnagar",
            "slug": "mujibnagar",
            "division_id": 3,
            "district_id": 32
        },
        {
            "id": 297,
            "bn_name": "Gangni",
            "name": "Gangni",
            "slug": "gangni",
            "division_id": 3,
            "district_id": 32
        },
        {
            "id": 298,
            "bn_name": "Narail Sadar",
            "name": "Narail Sadar",
            "slug": "narail-sadar",
            "division_id": 3,
            "district_id": 33
        },
        {
            "id": 299,
            "bn_name": "Kalia",
            "name": "Kalia",
            "slug": "kalia",
            "division_id": 3,
            "district_id": 33
        },
        {
            "id": 300,
            "bn_name": "Satkhira",
            "name": "Satkhira",
            "slug": "satkhira",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 301,
            "bn_name": "Tala",
            "name": "Tala",
            "slug": "tala",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 302,
            "bn_name": "Devhata",
            "name": "Devhata",
            "slug": "devhata",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 303,
            "bn_name": "Kalaroa",
            "name": "Kalaroa",
            "slug": "kalaroa",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 304,
            "bn_name": "Shyamnagar",
            "name": "Shyamnagar",
            "slug": "shyamnagar",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 305,
            "bn_name": "Ashashuni",
            "name": "Ashashuni",
            "slug": "ashashuni",
            "division_id": 3,
            "district_id": 34
        },
        {
            "id": 306,
            "bn_name": "Bogra Sadar",
            "name": "Bogra Sadar",
            "slug": "bogra-sadar",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 307,
            "bn_name": "Adomdighi",
            "name": "Adomdighi",
            "slug": "adomdighi",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 308,
            "bn_name": "Dhunat",
            "name": "Dhunat",
            "slug": "dhunat",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 309,
            "bn_name": "Dupchachia",
            "name": "Dupchachia",
            "slug": "dupchachia",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 310,
            "bn_name": "Gabtoli",
            "name": "Gabtoli",
            "slug": "gabtoli",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 311,
            "bn_name": "Kahalu",
            "name": "Kahalu",
            "slug": "kahalu",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 312,
            "bn_name": "Nandigram",
            "name": "Nandigram",
            "slug": "nandigram",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 313,
            "bn_name": "Sariakandi",
            "name": "Sariakandi",
            "slug": "sariakandi",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 314,
            "bn_name": "Sherpur",
            "name": "Sherpur",
            "slug": "sherpur",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 315,
            "bn_name": "Shibgonj",
            "name": "Shibgonj",
            "slug": "shibgonj",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 316,
            "bn_name": "Sonatola",
            "name": "Sonatola",
            "slug": "sonatola",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 317,
            "bn_name": "Sajahanpur",
            "name": "Sajahanpur",
            "slug": "sajahanpur",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 318,
            "bn_name": "Joypurhat Sadar",
            "name": "Joypurhat Sadar",
            "slug": "joypurhat-sadar",
            "division_id": 4,
            "district_id": 36
        },
        {
            "id": 319,
            "bn_name": "Panchbibi",
            "name": "Panchbibi",
            "slug": "panchbibi",
            "division_id": 4,
            "district_id": 36
        },
        {
            "id": 320,
            "bn_name": "Kalai",
            "name": "Kalai",
            "slug": "kalai",
            "division_id": 4,
            "district_id": 36
        },
        {
            "id": 321,
            "bn_name": "Khetlal",
            "name": "Khetlal",
            "slug": "khetlal",
            "division_id": 4,
            "district_id": 36
        },
        {
            "id": 322,
            "bn_name": "Akkelpur",
            "name": "Akkelpur",
            "slug": "akkelpur",
            "division_id": 4,
            "district_id": 36
        },
        {
            "id": 323,
            "bn_name": "Nogaon Sadar",
            "name": "Nogaon Sadar",
            "slug": "nogaon-sadar",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 324,
            "bn_name": "Patnitola",
            "name": "Patnitola",
            "slug": "patnitola",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 325,
            "bn_name": "Dhamurhat",
            "name": "Dhamurhat",
            "slug": "dhamurhat",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 326,
            "bn_name": "Mohadebpur",
            "name": "Mohadebpur",
            "slug": "mohadebpur",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 327,
            "bn_name": "Porsha",
            "name": "Porsha",
            "slug": "porsha",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 328,
            "bn_name": "Sapahar",
            "name": "Sapahar",
            "slug": "sapahar",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 329,
            "bn_name": "Badalgachi",
            "name": "Badalgachi",
            "slug": "badalgachi",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 330,
            "bn_name": "Manda",
            "name": "Manda",
            "slug": "manda",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 331,
            "bn_name": "Niamotpur",
            "name": "Niamotpur",
            "slug": "niamotpur",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 332,
            "bn_name": "Atrai",
            "name": "Atrai",
            "slug": "atrai",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 333,
            "bn_name": "Raninagar",
            "name": "Raninagar",
            "slug": "raninagar",
            "division_id": 4,
            "district_id": 37
        },
        {
            "id": 334,
            "bn_name": "Natore Sadar",
            "name": "Natore Sadar",
            "slug": "natore-sadar",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 335,
            "bn_name": "Bagatipara",
            "name": "Bagatipara",
            "slug": "bagatipara",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 336,
            "bn_name": "Boraigram",
            "name": "Boraigram",
            "slug": "boraigram",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 337,
            "bn_name": "Gurudaspur",
            "name": "Gurudaspur",
            "slug": "gurudaspur",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 338,
            "bn_name": "Singra",
            "name": "Singra",
            "slug": "singra",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 339,
            "bn_name": "Noldanga",
            "name": "Noldanga",
            "slug": "noldanga",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 340,
            "bn_name": "Lalpur",
            "name": "Lalpur",
            "slug": "lalpur",
            "division_id": 4,
            "district_id": 38
        },
        {
            "id": 341,
            "bn_name": "Chapai Sadar",
            "name": "Chapai Sadar",
            "slug": "chapai-sadar",
            "division_id": 4,
            "district_id": 39
        },
        {
            "id": 342,
            "bn_name": "Gamostapur",
            "name": "Gamostapur",
            "slug": "gamostapur",
            "division_id": 4,
            "district_id": 39
        },
        {
            "id": 343,
            "bn_name": "Shibganj",
            "name": "Shibganj",
            "slug": "shibganj",
            "division_id": 4,
            "district_id": 39
        },
        {
            "id": 344,
            "bn_name": "Nachol",
            "name": "Nachol",
            "slug": "nachol",
            "division_id": 4,
            "district_id": 39
        },
        {
            "id": 345,
            "bn_name": "Bholahat",
            "name": "Bholahat",
            "slug": "bholahat",
            "division_id": 4,
            "district_id": 39
        },
        {
            "id": 346,
            "bn_name": "Pabna Sadar",
            "name": "Pabna Sadar",
            "slug": "pabna-sadar",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 347,
            "bn_name": "Atgharia",
            "name": "Atgharia",
            "slug": "atgharia",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 348,
            "bn_name": "Ishwardi",
            "name": "Ishwardi",
            "slug": "ishwardi",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 349,
            "bn_name": "Chatmohar",
            "name": "Chatmohar",
            "slug": "chatmohar",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 350,
            "bn_name": "Faridpud",
            "name": "Faridpud",
            "slug": "faridpud",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 351,
            "bn_name": "Bera",
            "name": "Bera",
            "slug": "bera",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 352,
            "bn_name": "Bhangura",
            "name": "Bhangura",
            "slug": "bhangura",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 353,
            "bn_name": "Santhia",
            "name": "Santhia",
            "slug": "santhia",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 354,
            "bn_name": "Sujanagar",
            "name": "Sujanagar",
            "slug": "sujanagar",
            "division_id": 4,
            "district_id": 40
        },
        {
            "id": 355,
            "bn_name": "Bagha",
            "name": "Bagha",
            "slug": "bagha",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 356,
            "bn_name": "Puthia",
            "name": "Puthia",
            "slug": "puthia",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 357,
            "bn_name": "Poba",
            "name": "Poba",
            "slug": "poba",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 358,
            "bn_name": "Baghmara",
            "name": "Baghmara",
            "slug": "baghmara",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 359,
            "bn_name": "Durgapur",
            "name": "Durgapur",
            "slug": "durgapur",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 360,
            "bn_name": "Tanore",
            "name": "Tanore",
            "slug": "tanore",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 361,
            "bn_name": "Charghat",
            "name": "Charghat",
            "slug": "charghat",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 362,
            "bn_name": "Godagari",
            "name": "Godagari",
            "slug": "godagari",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 363,
            "bn_name": "Mohonpur",
            "name": "Mohonpur",
            "slug": "mohonpur",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 364,
            "bn_name": "katakhali ",
            "name": "katakhali ",
            "slug": "katakhali",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 365,
            "bn_name": "Motihar",
            "name": "Motihar",
            "slug": "motihar",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 366,
            "bn_name": "Rajpara",
            "name": "Rajpara",
            "slug": "rajpara",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 367,
            "bn_name": "Kashiadanga",
            "name": "Kashiadanga",
            "slug": "kashiadanga",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 368,
            "bn_name": "Boalia",
            "name": "Boalia",
            "slug": "boalia",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 369,
            "bn_name": "Shahmokdum",
            "name": "Shahmokdum",
            "slug": "shahmokdum",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 370,
            "bn_name": "Chandrima",
            "name": "Chandrima",
            "slug": "chandrima",
            "division_id": 4,
            "district_id": 41
        },
        {
            "id": 371,
            "bn_name": "Sirajganj Sadar",
            "name": "Sirajganj Sadar",
            "slug": "sirajganj-sadar",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 372,
            "bn_name": "Ullapar",
            "name": "Ullapar",
            "slug": "ullapar",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 373,
            "bn_name": "Kazipur ",
            "name": "Kazipur ",
            "slug": "kazipur",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 374,
            "bn_name": "Kamar Khanda",
            "name": "Kamar Khanda",
            "slug": "kamar-khanda",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 375,
            "bn_name": "Chouhali ",
            "name": "Chouhali ",
            "slug": "chouhali",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 376,
            "bn_name": "Tarash",
            "name": "Tarash",
            "slug": "tarash",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 377,
            "bn_name": "Belkuchi",
            "name": "Belkuchi",
            "slug": "belkuchi",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 378,
            "bn_name": "Rayganj",
            "name": "Rayganj",
            "slug": "rayganj",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 379,
            "bn_name": "Shahjadpur ",
            "name": "Shahjadpur ",
            "slug": "shahjadpur",
            "division_id": 4,
            "district_id": 42
        },
        {
            "id": 380,
            "bn_name": "Hobiganj Sadar",
            "name": "Hobiganj Sadar",
            "slug": "hobiganj-sadar",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 381,
            "bn_name": "Shaestaganj",
            "name": "Shaestaganj",
            "slug": "shaestaganj",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 382,
            "bn_name": "Madhabpur",
            "name": "Madhabpur",
            "slug": "madhabpur",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 383,
            "bn_name": "Lakhai",
            "name": "Lakhai",
            "slug": "lakhai",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 384,
            "bn_name": "Azmireeganj",
            "name": "Azmireeganj",
            "slug": "azmireeganj",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 385,
            "bn_name": "Baniachang",
            "name": "Baniachang",
            "slug": "baniachang",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 386,
            "bn_name": "Bahubal",
            "name": "Bahubal",
            "slug": "bahubal",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 387,
            "bn_name": "Chunarughat",
            "name": "Chunarughat",
            "slug": "chunarughat",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 388,
            "bn_name": "Nabiganj",
            "name": "Nabiganj",
            "slug": "nabiganj",
            "division_id": 5,
            "district_id": 43
        },
        {
            "id": 389,
            "bn_name": "Moulvibazar Sadar",
            "name": "Moulvibazar Sadar",
            "slug": "moulvibazar-sadar",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 390,
            "bn_name": "Baralekha",
            "name": "Baralekha",
            "slug": "baralekha",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 391,
            "bn_name": "Kulaura",
            "name": "Kulaura",
            "slug": "kulaura",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 392,
            "bn_name": "Juri",
            "name": "Juri",
            "slug": "juri",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 393,
            "bn_name": "Srimangal",
            "name": "Srimangal",
            "slug": "srimangal",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 394,
            "bn_name": "Kamalganj",
            "name": "Kamalganj",
            "slug": "kamalganj",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 395,
            "bn_name": "Rajnagar",
            "name": "Rajnagar",
            "slug": "rajnagar",
            "division_id": 5,
            "district_id": 44
        },
        {
            "id": 396,
            "bn_name": "Sunamganj Sadar",
            "name": "Sunamganj Sadar",
            "slug": "sunamganj-sadar",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 397,
            "bn_name": "Chatak",
            "name": "Chatak",
            "slug": "chatak",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 398,
            "bn_name": "Jagannathpur",
            "name": "Jagannathpur",
            "slug": "jagannathpur",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 399,
            "bn_name": "Tahirpur",
            "name": "Tahirpur",
            "slug": "tahirpur",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 400,
            "bn_name": "Jamalganj",
            "name": "Jamalganj",
            "slug": "jamalganj",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 401,
            "bn_name": "Shalla",
            "name": "Shalla",
            "slug": "shalla",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 402,
            "bn_name": "Derai",
            "name": "Derai",
            "slug": "derai",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 403,
            "bn_name": "Duarabazar",
            "name": "Duarabazar",
            "slug": "duarabazar",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 404,
            "bn_name": "Biswombhorpur",
            "name": "Biswombhorpur",
            "slug": "biswombhorpur",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 405,
            "bn_name": "Santigonj",
            "name": "Santigonj",
            "slug": "santigonj",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 406,
            "bn_name": "Moddonagar",
            "name": "Moddonagar",
            "slug": "moddonagar",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 407,
            "bn_name": "Dormopasha",
            "name": "Dormopasha",
            "slug": "dormopasha",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 408,
            "bn_name": "Sylhet sadar",
            "name": "Sylhet sadar",
            "slug": "sylhet-sadar",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 409,
            "bn_name": "Dakshin Surma",
            "name": "Dakshin Surma",
            "slug": "dakshin-surma",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 410,
            "bn_name": "Fenchuganj",
            "name": "Fenchuganj",
            "slug": "fenchuganj",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 411,
            "bn_name": "Balaganj",
            "name": "Balaganj",
            "slug": "balaganj",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 412,
            "bn_name": "Osmani Nagar",
            "name": "Osmani Nagar",
            "slug": "osmani-nagar",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 413,
            "bn_name": "Bishwanath",
            "name": "Bishwanath",
            "slug": "bishwanath",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 414,
            "bn_name": "Companiganj",
            "name": "Companiganj",
            "slug": "companiganj",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 415,
            "bn_name": "Goainghat",
            "name": "Goainghat",
            "slug": "goainghat",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 416,
            "bn_name": "Jaintapur",
            "name": "Jaintapur",
            "slug": "jaintapur",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 417,
            "bn_name": "Golapganj ",
            "name": "Golapganj ",
            "slug": "golapganj",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 418,
            "bn_name": "Beanibazar",
            "name": "Beanibazar",
            "slug": "beanibazar",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 419,
            "bn_name": "Kanaighat",
            "name": "Kanaighat",
            "slug": "kanaighat",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 420,
            "bn_name": "Zakigonj",
            "name": "Zakigonj",
            "slug": "zakigonj",
            "division_id": 5,
            "district_id": 46
        },
        {
            "id": 421,
            "bn_name": "Barguna Sadar",
            "name": "Barguna Sadar",
            "slug": "barguna-sadar",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 422,
            "bn_name": "Amtali",
            "name": "Amtali",
            "slug": "amtali",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 423,
            "bn_name": "Taltali",
            "name": "Taltali",
            "slug": "taltali",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 424,
            "bn_name": "Patharghata",
            "name": "Patharghata",
            "slug": "patharghata",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 425,
            "bn_name": "Bamna",
            "name": "Bamna",
            "slug": "bamna",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 426,
            "bn_name": "Betagi",
            "name": "Betagi",
            "slug": "betagi",
            "division_id": 6,
            "district_id": 47
        },
        {
            "id": 427,
            "bn_name": "Barishal Sadar",
            "name": "Barishal Sadar",
            "slug": "barishal-sadar",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 428,
            "bn_name": "Bakerganj",
            "name": "Bakerganj",
            "slug": "bakerganj",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 429,
            "bn_name": "Babuganj",
            "name": "Babuganj",
            "slug": "babuganj",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 430,
            "bn_name": "Uzirpur",
            "name": "Uzirpur",
            "slug": "uzirpur",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 431,
            "bn_name": "Gouranadi",
            "name": "Gouranadi",
            "slug": "gouranadi",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 432,
            "bn_name": "Agailzhara",
            "name": "Agailzhara",
            "slug": "agailzhara",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 433,
            "bn_name": "Muladi",
            "name": "Muladi",
            "slug": "muladi",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 434,
            "bn_name": "Hizla",
            "name": "Hizla",
            "slug": "hizla",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 435,
            "bn_name": "Mahendiganj",
            "name": "Mahendiganj",
            "slug": "mahendiganj",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 436,
            "bn_name": "Banaripara",
            "name": "Banaripara",
            "slug": "banaripara",
            "division_id": 6,
            "district_id": 48
        },
        {
            "id": 437,
            "bn_name": "Bhola Sadar",
            "name": "Bhola Sadar",
            "slug": "bhola-sadar",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 438,
            "bn_name": "Doulatkhan",
            "name": "Doulatkhan",
            "slug": "doulatkhan",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 439,
            "bn_name": "Borhanuddin",
            "name": "Borhanuddin",
            "slug": "borhanuddin",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 440,
            "bn_name": "Lalmohan",
            "name": "Lalmohan",
            "slug": "lalmohan",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 441,
            "bn_name": "Charfashion",
            "name": "Charfashion",
            "slug": "charfashion",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 442,
            "bn_name": "Tojumoddin",
            "name": "Tojumoddin",
            "slug": "tojumoddin",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 443,
            "bn_name": "Monpura",
            "name": "Monpura",
            "slug": "monpura",
            "division_id": 6,
            "district_id": 49
        },
        {
            "id": 444,
            "bn_name": "Jhalokathi Sadar",
            "name": "Jhalokathi Sadar",
            "slug": "jhalokathi-sadar",
            "division_id": 6,
            "district_id": 50
        },
        {
            "id": 445,
            "bn_name": "Rajapur",
            "name": "Rajapur",
            "slug": "rajapur",
            "division_id": 6,
            "district_id": 50
        },
        {
            "id": 446,
            "bn_name": "Nalchhiti",
            "name": "Nalchhiti",
            "slug": "nalchhiti",
            "division_id": 6,
            "district_id": 50
        },
        {
            "id": 447,
            "bn_name": "Kathalia",
            "name": "Kathalia",
            "slug": "kathalia",
            "division_id": 6,
            "district_id": 50
        },
        {
            "id": 448,
            "bn_name": "Patuakhali sadar",
            "name": "Patuakhali sadar",
            "slug": "patuakhali-sadar",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 449,
            "bn_name": "Dumki",
            "name": "Dumki",
            "slug": "dumki",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 450,
            "bn_name": "Mirzaganj",
            "name": "Mirzaganj",
            "slug": "mirzaganj",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 451,
            "bn_name": "Bauphal",
            "name": "Bauphal",
            "slug": "bauphal",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 452,
            "bn_name": "Dashmina",
            "name": "Dashmina",
            "slug": "dashmina",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 453,
            "bn_name": "Galachipa",
            "name": "Galachipa",
            "slug": "galachipa",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 454,
            "bn_name": "Rangabali",
            "name": "Rangabali",
            "slug": "rangabali",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 455,
            "bn_name": "Kalapara",
            "name": "Kalapara",
            "slug": "kalapara",
            "division_id": 6,
            "district_id": 51
        },
        {
            "id": 456,
            "bn_name": "Pirojpur Sadar",
            "name": "Pirojpur Sadar",
            "slug": "pirojpur-sadar",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 457,
            "bn_name": "Indurkani",
            "name": "Indurkani",
            "slug": "indurkani",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 458,
            "bn_name": "Kaukhali",
            "name": "Kaukhali",
            "slug": "kaukhali",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 459,
            "bn_name": "Swarupkathi",
            "name": "Swarupkathi",
            "slug": "swarupkathi",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 460,
            "bn_name": "Nasarabad",
            "name": "Nasarabad",
            "slug": "nasarabad",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 461,
            "bn_name": "Nazirpur",
            "name": "Nazirpur",
            "slug": "nazirpur",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 462,
            "bn_name": "Bhandaria",
            "name": "Bhandaria",
            "slug": "bhandaria",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 463,
            "bn_name": "Mathbaria",
            "name": "Mathbaria",
            "slug": "mathbaria",
            "division_id": 6,
            "district_id": 52
        },
        {
            "id": 464,
            "bn_name": "Jamalpur Sadar",
            "name": "Jamalpur Sadar",
            "slug": "jamalpur-sadar",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 465,
            "bn_name": "Melandaha",
            "name": "Melandaha",
            "slug": "melandaha",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 466,
            "bn_name": "Islampur",
            "name": "Islampur",
            "slug": "islampur",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 467,
            "bn_name": "Dewanganj",
            "name": "Dewanganj",
            "slug": "dewanganj",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 468,
            "bn_name": "Madarganj",
            "name": "Madarganj",
            "slug": "madarganj",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 469,
            "bn_name": "Sarishabari",
            "name": "Sarishabari",
            "slug": "sarishabari",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 470,
            "bn_name": "Bakshigonj",
            "name": "Bakshigonj",
            "slug": "bakshigonj",
            "division_id": 7,
            "district_id": 53
        },
        {
            "id": 471,
            "bn_name": "Mymensingh sadar",
            "name": "Mymensingh sadar",
            "slug": "mymensingh-sadar",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 472,
            "bn_name": "Muktagachha",
            "name": "Muktagachha",
            "slug": "muktagachha",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 473,
            "bn_name": "Fulbaria",
            "name": "Fulbaria",
            "slug": "fulbaria",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 474,
            "bn_name": "Trishal",
            "name": "Trishal",
            "slug": "trishal",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 475,
            "bn_name": "Gaforgaon",
            "name": "Gaforgaon",
            "slug": "gaforgaon",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 476,
            "bn_name": "Bhaluka",
            "name": "Bhaluka",
            "slug": "bhaluka",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 477,
            "bn_name": "Phulpur ",
            "name": "Phulpur ",
            "slug": "phulpur",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 478,
            "bn_name": "Tarakanda",
            "name": "Tarakanda",
            "slug": "tarakanda",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 479,
            "bn_name": "Haluaghat",
            "name": "Haluaghat",
            "slug": "haluaghat",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 480,
            "bn_name": "Gouripur",
            "name": "Gouripur",
            "slug": "gouripur",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 481,
            "bn_name": "Isshwargonj",
            "name": "Isshwargonj",
            "slug": "isshwargonj",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 482,
            "bn_name": "Dhobaura",
            "name": "Dhobaura",
            "slug": "dhobaura",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 483,
            "bn_name": "Nandail UPO",
            "name": "Nandail UPO",
            "slug": "nandail-upo",
            "division_id": 7,
            "district_id": 54
        },
        {
            "id": 484,
            "bn_name": "Netrakona Sadar",
            "name": "Netrakona Sadar",
            "slug": "netrakona-sadar",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 485,
            "bn_name": "Purbadhola",
            "name": "Purbadhola",
            "slug": "purbadhola",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 486,
            "bn_name": "Susung Durgapur",
            "name": "Susung Durgapur",
            "slug": "susung-durgapur",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 487,
            "bn_name": "Kalmakanda",
            "name": "Kalmakanda",
            "slug": "kalmakanda",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 488,
            "bn_name": "Barhatta",
            "name": "Barhatta",
            "slug": "barhatta",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 489,
            "bn_name": "Mohanganj",
            "name": "Mohanganj",
            "slug": "mohanganj",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 490,
            "bn_name": "Khaliajuri",
            "name": "Khaliajuri",
            "slug": "khaliajuri",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 491,
            "bn_name": "Atpara",
            "name": "Atpara",
            "slug": "atpara",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 492,
            "bn_name": "Kendua",
            "name": "Kendua",
            "slug": "kendua",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 493,
            "bn_name": "Madan",
            "name": "Madan",
            "slug": "madan",
            "division_id": 7,
            "district_id": 55
        },
        {
            "id": 494,
            "bn_name": "Sherpur Sadar",
            "name": "Sherpur Sadar",
            "slug": "sherpur-sadar",
            "division_id": 7,
            "district_id": 56
        },
        {
            "id": 495,
            "bn_name": "Nalitabari",
            "name": "Nalitabari",
            "slug": "nalitabari",
            "division_id": 7,
            "district_id": 56
        },
        {
            "id": 496,
            "bn_name": "Jhinaigati",
            "name": "Jhinaigati",
            "slug": "jhinaigati",
            "division_id": 7,
            "district_id": 56
        },
        {
            "id": 497,
            "bn_name": "Shribardi",
            "name": "Shribardi",
            "slug": "shribardi",
            "division_id": 7,
            "district_id": 56
        },
        {
            "id": 498,
            "bn_name": "Nakla",
            "name": "Nakla",
            "slug": "nakla",
            "division_id": 7,
            "district_id": 56
        },
        {
            "id": 499,
            "bn_name": "Dinajpur",
            "name": "Dinajpur",
            "slug": "dinajpur",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 500,
            "bn_name": "Parbatipur",
            "name": "Parbatipur",
            "slug": "parbatipur",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 501,
            "bn_name": "Birampur",
            "name": "Birampur",
            "slug": "birampur",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 502,
            "bn_name": "Birganj",
            "name": "Birganj",
            "slug": "birganj",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 503,
            "bn_name": "Biral",
            "name": "Biral",
            "slug": "biral",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 504,
            "bn_name": "Bachaganj",
            "name": "Bachaganj",
            "slug": "bachaganj",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 505,
            "bn_name": "Chrirbandar",
            "name": "Chrirbandar",
            "slug": "chrirbandar",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 506,
            "bn_name": "Phulbari",
            "name": "Phulbari",
            "slug": "phulbari",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 507,
            "bn_name": "Ghoraghat",
            "name": "Ghoraghat",
            "slug": "ghoraghat",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 508,
            "bn_name": "Hakimpur",
            "name": "Hakimpur",
            "slug": "hakimpur",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 509,
            "bn_name": "Kaharole",
            "name": "Kaharole",
            "slug": "kaharole",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 510,
            "bn_name": "Khansama",
            "name": "Khansama",
            "slug": "khansama",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 511,
            "bn_name": "Nababganj",
            "name": "Nababganj",
            "slug": "nababganj",
            "division_id": 8,
            "district_id": 57
        },
        {
            "id": 512,
            "bn_name": "Gaibandha Sadar",
            "name": "Gaibandha Sadar",
            "slug": "gaibandha-sadar",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 513,
            "bn_name": "Phulchari",
            "name": "Phulchari",
            "slug": "phulchari",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 514,
            "bn_name": "Gobindoganj ",
            "name": "Gobindoganj ",
            "slug": "gobindoganj",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 515,
            "bn_name": "Palashbsri",
            "name": "Palashbsri",
            "slug": "palashbsri",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 516,
            "bn_name": "Saghata",
            "name": "Saghata",
            "slug": "saghata",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 517,
            "bn_name": "Sundarganj",
            "name": "Sundarganj",
            "slug": "sundarganj",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 518,
            "bn_name": "Saadullapur",
            "name": "Saadullapur",
            "slug": "saadullapur",
            "division_id": 8,
            "district_id": 58
        },
        {
            "id": 519,
            "bn_name": "Kurigram \u200dSadar",
            "name": "Kurigram \u200dSadar",
            "slug": "kurigram-sadar",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 520,
            "bn_name": "Bhurungamari",
            "name": "Bhurungamari",
            "slug": "bhurungamari",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 521,
            "bn_name": "Ulipur",
            "name": "Ulipur",
            "slug": "ulipur",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 522,
            "bn_name": "Chilmari",
            "name": "Chilmari",
            "slug": "chilmari",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 523,
            "bn_name": "Rajarhat",
            "name": "Rajarhat",
            "slug": "rajarhat",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 524,
            "bn_name": "Nageshwari",
            "name": "Nageshwari",
            "slug": "nageshwari",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 525,
            "bn_name": "Roumari",
            "name": "Roumari",
            "slug": "roumari",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 526,
            "bn_name": "Rajibpur",
            "name": "Rajibpur",
            "slug": "rajibpur",
            "division_id": 8,
            "district_id": 59
        },
        {
            "id": 527,
            "bn_name": "Lalmonirhat Sadar",
            "name": "Lalmonirhat Sadar",
            "slug": "lalmonirhat-sadar",
            "division_id": 8,
            "district_id": 60
        },
        {
            "id": 528,
            "bn_name": "Aditmari",
            "name": "Aditmari",
            "slug": "aditmari",
            "division_id": 8,
            "district_id": 60
        },
        {
            "id": 529,
            "bn_name": "Hatibandha",
            "name": "Hatibandha",
            "slug": "hatibandha",
            "division_id": 8,
            "district_id": 60
        },
        {
            "id": 530,
            "bn_name": "patgram",
            "name": "patgram",
            "slug": "patgram",
            "division_id": 8,
            "district_id": 60
        },
        {
            "id": 531,
            "bn_name": "Nilphamari \u200dSadar",
            "name": "Nilphamari \u200dSadar",
            "slug": "nilphamari-sadar",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 532,
            "bn_name": "Dimla",
            "name": "Dimla",
            "slug": "dimla",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 533,
            "bn_name": "Domar",
            "name": "Domar",
            "slug": "domar",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 534,
            "bn_name": "Jaldhaka",
            "name": "Jaldhaka",
            "slug": "jaldhaka",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 535,
            "bn_name": "Kishoriganj",
            "name": "Kishoriganj",
            "slug": "kishoriganj",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 536,
            "bn_name": "Syedpur",
            "name": "Syedpur",
            "slug": "syedpur",
            "division_id": 8,
            "district_id": 61
        },
        {
            "id": 537,
            "bn_name": "Panchagarh ",
            "name": "Panchagarh ",
            "slug": "panchagarh",
            "division_id": 8,
            "district_id": 62
        },
        {
            "id": 538,
            "bn_name": "Boda",
            "name": "Boda",
            "slug": "boda",
            "division_id": 8,
            "district_id": 62
        },
        {
            "id": 539,
            "bn_name": "Dabiganj",
            "name": "Dabiganj",
            "slug": "dabiganj",
            "division_id": 8,
            "district_id": 62
        },
        {
            "id": 540,
            "bn_name": "Atwari",
            "name": "Atwari",
            "slug": "atwari",
            "division_id": 8,
            "district_id": 62
        },
        {
            "id": 541,
            "bn_name": "Telulia",
            "name": "Telulia",
            "slug": "telulia",
            "division_id": 8,
            "district_id": 62
        },
        {
            "id": 542,
            "bn_name": "Rangpur Sadar",
            "name": "Rangpur Sadar",
            "slug": "rangpur-sadar",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 543,
            "bn_name": "Gangachara",
            "name": "Gangachara",
            "slug": "gangachara",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 544,
            "bn_name": "Kaunia",
            "name": "Kaunia",
            "slug": "kaunia",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 545,
            "bn_name": "Mithapukur",
            "name": "Mithapukur",
            "slug": "mithapukur",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 546,
            "bn_name": "Pirganj",
            "name": "Pirganj",
            "slug": "pirganj",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 547,
            "bn_name": "Pirgacha",
            "name": "Pirgacha",
            "slug": "pirgacha",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 548,
            "bn_name": "Taraganj",
            "name": "Taraganj",
            "slug": "taraganj",
            "division_id": 8,
            "district_id": 63
        },
        {
            "id": 549,
            "bn_name": "Thakurgaon",
            "name": "Thakurgaon",
            "slug": "thakurgaon",
            "division_id": 8,
            "district_id": 64
        },
        {
            "id": 550,
            "bn_name": "Baliadangi",
            "name": "Baliadangi",
            "slug": "baliadangi",
            "division_id": 8,
            "district_id": 64
        },
        {
            "id": 551,
            "bn_name": "Horipur",
            "name": "Horipur",
            "slug": "horipur",
            "division_id": 8,
            "district_id": 64
        },
        {
            "id": 552,
            "bn_name": "Rani Sankail",
            "name": "Rani Sankail",
            "slug": "rani-sankail",
            "division_id": 8,
            "district_id": 64
        }
    ]';
        return json_decode($json_data, true);
    }
}
