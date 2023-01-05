$('input[type="radio"]').click(function(){
    var inputValue = $(this).attr("value");
    var targetBox = $('#spouseInfo');
    if(inputValue == 'Defacto'||inputValue == 'Married'||inputValue == 'Widowed'||inputValue == 'Divorced') {
        $("#spouseInfo").removeClass("hideField");
    }else{
        if (!$("#spouseInfo").hasClass("hideField")) {
            $("#spouseInfo").addClass("hideField");
        }
    }

});

$("#selectOccupation").change(function () {
    if ($("#selectOccupation").find(":selected").val() == "Student") {
        $("#schoolName").removeClass("hideField");
    } else {
        if (!$("#schoolName").hasClass("hideField")) {
            $("#schoolName").addClass("hideField");
        }
    }
    if ($("#selectOccupation").find(":selected").val() == "Public Servant") {
        $("#publicServantInfo").removeClass("hideField");
    } else {
        if (!$("#publicServantInfo").hasClass("hideField")) {
            $("#publicServantInfo").addClass("hideField");
        }
    }
    if ($("#selectOccupation").find(":selected").val() == "Self Employed") {
        $("#selfEmployedInfo").removeClass("hideField");
    } else {
        if (!$("#selfEmployedInfo").hasClass("hideField")) {
            $("#selfEmployedInfo").addClass("hideField");
        }
    }
});
$("#disability").change(function () {
    if ($("#disability").find(":selected").val() == "1") {
        $("#disabilityInfo").removeClass("hideField");
    } else {
        if (!$("#disabilityInfo").hasClass("hideField")) {
            $("#disabilityInfo").addClass("hideField");
        }
    }
});

$("#selectReligion").change(function () {
    if ($("#selectReligion").find(":selected").val() == "Others") {
        $("#otherReligon").removeClass("hideField");
        // $("#localChurch").addClass("hideField");


    } else {
        if (!$("#otherReligon").hasClass("hideField")) {
            $("#otherReligon").addClass("hideField");
        }
    }
    if ($("#selectReligion").find(":selected").val() == "Christianity") {
        $("#churchList").removeClass("hideField");
        $("#localChurch").addClass("hideField");

    } else {
        if (!$("#churchList").hasClass("hideField")) {
            $("#churchList").addClass("hideField");
            $("#localChurch").removeClass("hideField");

        }

    }
});
var subjectObject = {
    "HIGHLANDS": {
        "Chimbu": {
            "CHUAVE": {
                "Chuave Rural": ["Sirikoge", " Emegi", " Membimangi", " Togoma", " Agugu", " Kautambandi", " Maimagu", " Goi", " Mainamo", " Keu No. 1", " Keu No. 2", " Onoma", " Eigun", " Chuave Urban",],
                "Elimbari Rural": ["Monono", " Gogo No.1", " Gogo No.2", " Kuraigure", " Kurere 1", " Kurere 2", " Giriu No.1", " Giriu No.2", " Wangoi", " Kororume No.1", " Kururume", " Yorori", " Pimuri No.2", " Pimuri (Oroma)", " Karaweri No.1", " Karaweri No.2",],
                "Siane Rural": ["Kereku", " Waisime", " Murefaku", " Marefaku", " Nime-Kaupa", " Mi-Fokowe", " Kumogu", " Atinogu", " Irafaiufa", " Komuni No. 1", " Famundi", " Seine", " Rabiufa", " Rumbuiufa", " Andomono", " Feremena", " Wafo", " Lofaifo", " Loanoi", " Nomanena", " Kemami", " Nomane", " Norifo", " Komborufa", " Foinawa", " Komni No. 2", " Kifiufa",],
            },
            "GUMINE": {
                "Bomai-Gumai Rural LLG": ["Era 1", " Era 2", " Era/Buli", " Omdara", " Kua", " Dia", " Kopan", " Yuri", " Deliku", " Ainaku", " Kawaleku", " Nebiku",],
                "Gumine Rural": ["Tagala", " Omkolai 1", " Omkolai 2", " Yani", " Milinkane", " Bomaigaulin", " Kipaku", " Aleku", " Kaleku", " Koiyaku", " Nigemarime", " Gumine Stn", " Kunarku", " Milaku", " Neraku", " Egeku", " Neraku", " Sabamingaulin", " Sanigekain", " Satobuku", " Kumaikaine",],
                "Mount Digine Rural": ["Gorma", " Kel", " Korokea", " Digibe", " Sipagul", " Genabona", " Kariglmaril", " Gaima", " Munuma", " Oldale", " Oldale 1", " Oldale 2",],
            },
            "KARIMUI-NOMANE": {
                "Karimui Rural": ["Yuro 1", " Yuro 2", " Huwaiyo", " Wario", " Karimui Station 1", " Karimui Station 2", " Norowai", " Boisamaru 1", " Boisamaru 2", " Yogoromaru", " Dibe 1", " Dibe 2", " Negabo", " Tua 1", " Tua 2 (Tilige)", " Masi", " Maina 1", " Maina 2", " Solari (Noru)", " Sola", " Waiamani (Dobu)", " Dobea", " Orotabe (Bomai)", " Unane", " Suruka (Kapi)", " Haia", " Soliabeto",],
                "Nomane Rural": ["Dekamane", " Awna", " Gaimo", " Kolu", " Oru", " Monowari", " Kora", " Dama", " Hopum", " Yuwai", " Kalem", " Kukama", " Apuri",],
                "Salt Rural": ["Banievera", " Sua Begen", " Dirima 2", " Dayani", " Goroba", " Ainabane", " Perwi", " Yopakeni", " Yopaeri", " Mogiagi", " Morinil/Kori", " Yopakul", " Waido", " Tapiekul", " Kobiebalmil", " Tapai", " Yuribol", " Mirima", " Bori", " Mulugra", " Mankon", " Kama", " Gaima",],
            },
            "KEROWAGI": {
                "Gena-Waugla Rural LLG": ["Nogar", " Mukuna", " Bombir", " Kendine", " Kambang", " Sim", " Dimbinyaundo", " Duglgambagl", " Kunbi", " Kombuku", " Siambugla Waugku", " Saimgugla Wauku", " Genayogombo", " Boomgate",],
                "Upper-Lower Koronigl Rural LLG": ["Dage Mitna 1", " Dage Mitna 2", " Dage Mitna 3", " Dageyogombo 1", " Dageyogombo 2", " Kamaneku (Supma-Akaduku-Kalaku Siure)", " Siku (Goglme)", " Kameneku 2 (Kendkane-Darabuno)", " Pagau 1 (Benganduku-Dawage)", " Pagau 2 (Benganduku-Bunamugl)", " Pagau/Sibaigu (Kondan)", " Pagau 3 (Komkane-Nombuna)", " Pagau 4 (Komkane-Angagoi)", " Giraiku 1 (Akbanige)", " Giraiku 2 (Wirebris)", " Bindiku (Kawa)", " Bindiku", " Damba", " Nimaikane (Goglmugl)", " Dageyogombo 3", " Dageminta 4", " Kamaneku/Siambula (Gagugl)",],
                "Kup Rural": ["Kumga", " Kumai Bonmeku", " Yuri", " Kuma Deingeku", " Kuma Kindingapam", " Endugla Nanginku", " Endugla Kunaunaku 1", " Endugla Kunaunaku 2", " Yopa", " Bandi No. 2", " Bandi No. 1",],
                "Kerowagi Urban": ["Kerowagi Urban",],
            },
            "SINASINA-YONGGAMUGL,": {
                "Tabare Rural (Sinasina)": ["Bulagesible",
                    "Gilmai/Arebi",
                    "Maima",
                    "Temisnowai",
                    "Galaku",
                    "Klai",
                    "Masul 1",
                    "Masul 2",
                    "Yalemesi",
                    "Yalkomno",
                    "Kapma (Garen)",
                    "Kapma (Mak)",
                    "Woma",
                    "Kautabandi",
                ],
                "Suai Rural": ["Dugul", " Oglew/Aula", " Bomaiku", " Du 1", " Du 2", " Du 3", " Kreku/Sipaku", " Aniku", " Kreku/Korul", " Niniku", " Piga", " Kagle", " Digakane", " Kumankane", " Au/Erakane", " Kagul", " Yoruaku", " Mau/Emre", " Kuiam", " Maribebi-Kui", " Kebil 1", " Kebil2", " Kebai (Blue Mountain)",],
                "Yonggomugl Rural": ["Mogl", " Kagai", " Guruma 1", " Guruma 2", " Muasugo", " Mai", " Mai", " Niglguma 1", " Niglguma 2", " Niglguma 3", " Ku 1", " Ku 2",],


            },
            "KUNDIAWA": {
                "Kundiawa Urban": ["Kundiawa Urban",],
                "Mitnande Rural": ["Maglau/Wandigle", " Maglau/Komkane 1", " Maglau/Komkane 2", " Maglau/Deglaku 1", " Maglau", " Maglau/Denglaku 2", " Inaugl 1", " Inaugl 2", " Inaugl 3", " Inaugl/Kunaiku", " Inaugl 4", " Kuglkane 1", " Kuglkane 2", " Kuglkane 3", " Kuglkane 4", " Kuglkane 5", " Kuglkane 6",],
                "Niglkande Rural": ["Kewandeku/Mainagl", " Girai Tamagle/Anga", " Girai Tamagle", " Nunuiomane 1", " Nunuiomane 2", " Kewandeku/Dugpag", " Kengaglku/Kalaku 1", " Kengaglku/Kalaku 2", " Kombri 2", " Gandenkoraglku", " Koromba Barengigl", " Kengaglku/Kruglku", " Girai Tamage",],
                "Waiye Rural": ["Kupau", " Pari", " Kurumugl", " Nogoma", " Koglai", " Anigl", " Guo", " Wandi", " Yuagle/Mindima Camp", " Mindima", " Gor", " Gor", " Koroma", " Nogar", " Nogar", " Dingile", " Kondo",],

            },
        },
        "Eastern Highlands": {
            "DAULO": {
                "Watabung Rural": ["Mangiro", " Kenangi", " Koningi", " Komoingareka", " Yamofe", " Komongu",],
                "Lower Asaro Rural": ["Mando-Yamayufa", " Korepa", " Asaro No. 1", " Asaro No. 2", " Tafeto/Wantrifu", " Gamiyuho", " Lunumbeyuho", " Kanosa", " Kofena",],
                "Upper Asaro Rural": ["Anengu", " Kombiangu/Amaiufa", " Namta", " Pikosa", " Aneguyufa", " Kwonggi No. 1", " Kwonggi No. 2", " Wesan",],
            },

            "GOROKA": {
                "Gahuku Rural": ["Upper Yaukave", " Lower Yaukave", " Kami-Seigu", " Kama", " Fimito", " Kotuni", " Gahuku", " Gehamo",],
                "Goroka Urban": ["Goroka Urban", " Bihute",],
                "Mimanalo Rural": ["Zomaga", " Ifiyufa", " Nokondi", " Kabiufa No. 2",],

            },
            "HENGANOFI": {
                "Kafentina Rural": ["Kompri", " Krevanofi", " Avani", " Ababe, Keka (Ifompaga) & Hayafaga", " Yohotegave", " Fomurenave", " Finintugu", " Kamanonka", " Tebega", " Tebenofi", " Henganofi Station",],
                "Dunantina Rural": ["Lihona", " Kuyahapa", " Kesevaka(Zagafonave) No 2", " Kesevaka No 1", " Haguragave", " Kiviringka", " Herave", " Kemenave",],
                "Fayantina Rural": ["Yate", " Kuru", " Yameve", " Kripave", " Faiyantina", " Nunofi", " Fore", " Kuana", " Numuyagave", " Krebave", " Kofionka",],
            },
            "KAINANTU": {
                "Kainantu Urban": ["Kainantu Urban", " Aiyura Urban", " Ukarumpa S.I.L.", " Yonki Township",],
                "Kamano No. 1 Rural": ["Onampinka", " Taranofi", " Iva", " Omena", " Ino'onka", " Bush Kamano",],
                "Agarabi Rural": ["Ramu", " Onkono", " Aubana", " Pakino", " Anonapa", " Akuitenu", " Anawa-Yonki", " Yonki No. 1",],
                "Gadsup-Tairora Rural LLG": ["Orona", " Mamarain", " Binumarien", " Pundibasa", " Asa", " Kubana", " Yomuka", " Karawepa", " Binakemu", " Arau", " Osarora", " Andandara", " Erandora", " Norikori", " Nompia", " Tontona", " Norianda", " Kosa",],
                "Kamano No. 2 Rural": ["Sohe", " Usurufa", " Karufa/Tafesa", " Ijavinon - Ta", " Anumaga", " Yamaso",],
            },
            "LUFA": {
                "Unavi Rural": ["Megino No. 2", " Maimafu", " Giuasa", " Mane No. 2", " Maiva", " Ubaigubi", " Herowana", " Agibu", " Mane No. 1",],
                "Mount Michael Rural": ["Agotu", " Hegeturu", " Fiamotave", " Megino No. 1", " Gouno", " Beha", " Korowa", " Lufa Station", " Hairo", " Menilo", " Hagaulo", " Kuruku",],
                "Yagaria Rural": ["Higivavi", " Oliguti", " Kami", " Forapi No. 1", " Litipinaga", " Gotomi", " Lufugu", " Kiseveroka", " Kogoraipa", " Daginava", " Nupuru",],
            },
            "OBURA-WONENARA": {
                "Lamari Rural": ["Motokara", " Kobara", " Atagara", " Numbaira", " Bibeori", " Baira No. 2", " Baira No. 1", " Mei'auna", " Ogurataba", " Bi'api'arata", " Bakumpa", " Kawaina No. 1", " Kumbora", " Saurona", " Obura Gov't Station", " Kurunumbura", " Yunura", " Asara", " Himarata", " Anima", " Tunana", " Ahea", " Habi ina", " Oraura No. 1", " Kokombira", " Pinata", " Owena", " Tainoraba", " Mobutasa", " Agamusi",],
                "Yelia Rural": ["Garipme", " Marawaka Station", " Kwalusila", " Marawaka", " Giliwato", " Gawoi", " Sindainya", " Jomuru", " Yamuru", " Mala", " Sinei", " Asenave", " Boiko", " Malari", " Devevi", " Yelia", " Sesai / Tjejai", " Kandwe / Miniri", " Dungkwi", " Ijelelukore", " Nire", " Pinji", " Ororingo", " Wiobo", " Yanyi", " Wapme/Wonenara", " Butnari", " Yabwiara", " Orobina", " Andakombi", " Met'naka", " Yakana", " Simogu", " Kamoiriba",],
            },
            "OKAPA": {
                "East Okapa Rural": ["Purosa", " Awarosa", " Orie", " Unasa", " Yagareba", " Paegatasa", " Oma-Kasoru", " Yasubi", " Yagusa", " Ibusa", " Kasoru", " Ofafina", " Okapa Station", " Kawaina", " Amaira", " Asempa", " Sefuna",],
                "West Okapa Rural": ["Kemiu", " Kokopi", " Wayoepa", " Tarabo", " Ke'efu", " Yagana", " Haga",],
            },
            "UNGAI-BENA": {
                "Lower Benna Rural": ["Siokie", " Katagu", " Ketarabo", " Korofeigu", " Magitu", " Hofagaiufa", " Conner Bena",],
                "Upper Benna Rural": ["Rintebe", " Mipo Klopabo / Nayufa - Nipuvo", " Yatgu-Safa Megunagu", " Benevenabo / Segerehei", " Kogaru Megabo", " Kuritafa/Megabo No. 2", " Liorofa",],
                "Unggai Rural": ["Aligayufa", " Yabiyufa", " Wando", " Orumba", " Orumba-Foe", " Yauna-Koko",],
            },
        },
        "Enga": {
            "KANDEP": {
                "Kandep Rural": ["Weri", " Mumunt", " Iuripaka", " Supi", " Aluwaip", " Gini", " Komborosa", " Imali (Pindata)", " Pindaka", " Pura", " Kambia", " Koropa", " Lagalap No.1", " Lakalap No.2", " Winjap No.1", " Winjap No.2", " Lawe", " Muyen", " Warabim No.1", " Warabim No.2", " Teteres", " Yapum", " Murip", " Lakis", " Lyumbi Island", " Porgeramanda", " Kokas", " Rugutengesa", " Kandep Stn", " Sawi", " Werit 2", " Ipul", " Komatin (Megere)", " Tinjipak (Supi No.2)", " Wambokon (Gini No.2)", " Kondo (Kombolos No.2)", " Kamale (Imali 2)", " Kalimang (Pindak 2)", " Mamamdai Pura 2", " Kambia 2", " Lauk Kolopa 2", " Tarapis", " Kiap Akulia", " Lawe 2", " Kemau Tesres", " Kiakau Murip 2", " Keso", " Wapis Kokas 2", " Nangulam Lungutenges 2", " Sawi No.2", " Kola", " Kolopen",],
                "Wage Rural": ["Yumbis", " Karekare", " Longap", " Mamal", " Peliyanjak", " Porokale", " Titengis", " Kitali", " Kumbanda", " Sitindak", " Kuikale", " Andokoe", " Bioko", " Imapiak", " Kanean", " Kinduli", " Laguni", " Maru", " Rumbipak", " Titip", " Nerep", " Waip", " Kondaka",],
            },
            "KOMPIAM/AMBUM": {
                "Ambum Rural": ["Par", " Lakapos", " Yampu", " Tialipos", " Aiametes", " Talemanda", " Palimbi", " Pandai", " Kasi", " Lakui", " Lakamanda", " Sikiro", " Sikiro Catholic Mission", " Anditale 1", " Anditale 2", " Omain", " Monokam", " Tongem", " Kupin", " Kanomares", " Kambus", " Londor", " Elakale", " Penei (Lailam)", " Yarulama",],
                "Kompiam Rural": ["Silim", " Birip", " Wapai", " Sauanda", " Aiyulites", " Pomanda", " Kipilimanda", " Kompiam Station", " Imbilik", " Kaipures", " Waibukam/Waipukam", " Kaindan", " Winikos", " Laiagam", " Yamanda", " Lingenas/Lengenas", " Rum", " Paip", " Pagalilyam", " Aperas", " Kiokai", " Liap", " Ipmauanda", " Lapalama", " Lyiamanda", " Rudisau", " Lailam No. 1", " Keman", " Paimanda", " Pulipas", " Alakul", " Kaimas", " Yaumanda", " Samaremanda", " Yawalimanda", " Aipanda", " Amaimal", " Makale",],
                "Wapi-Yengis Rural": ["Yengis", " Saina", " Kenailama", " Mulale", " Warabul", " Pulukulama", " Pumean", " Kapumanda", " Mengao", " Mosop", " Yambaitok", " Kopaipalo", " Olimoli", " Elem",],
            },
            "Lagaip-Porgera": {
                "Lagaip Rural": ["Mamale", " Wapele", " Kembos", " Komaip", " Wanepos", " Takuup", " Kasap", " Yangiyangi", " Kindarep", " Yakenda", " Keriapaka", " Aiyak (Aiyaka)", " Ipai", " Lyonge", " Paip", " Liop", " Yaki Due", " Sirunki", " Yailingis", " Kaipare", " Pore", " Tukusenda (Tukisenta)", " Nagulama", " Yomondi", " Kusi", " Paindako", " Kulita", " Watali", " Pipingus", " Kuimas", " Laiagam Urban",],
                "Maip Muritaka Rural": ["Tumudane", " Walya", " Yeim", " Yalum", " Tombaip", " Rumbapes", " Yambali", " Mulitaka", " Torenam", " Malaumanda", " Lauk", " Tokom (Winjak)", " Lemong/Poreak", " Kaundak", " Pokolip", " Yuyango", " Puaipak", " Paitengis", " Ipalopa",],
                "Porgera Rural": ["Anawe", " Mugulep", " Apalaka", " Yuyan", " Politika", " Paiyam", " Palipaka", " Kairik", " Tipinini", " Yomodaka", " Yanjakali", " Nekeyanga", " Yaparep", " Yarik", " Pandami (Kairik)", " Taipoko", " Porgera Urban",],
                "Paiela-Hewa Rural LLG": ["Aspringa", " Piawe-Bealo", " Ingilepe", " Kolombi Central", " Waimalama", " Komanga", " Takopa", " Taronga", " Andita", " Kole-Kanjiawi", " Mandaukale", " Papaki", " Mt. Kare", " Waiyalima", " Paiela Station", " Weyonga",],
                "Pilikambi Rural": ["Kinapulama",
                    "Yokonda",
                    "Tupangus",
                    "Porgeras",
                    "Yangil",
                    "Kailam",
                    "Landelam",
                    "Piyakain",
                    "Tumbiop",
                    "Kanamanda",
                    "Kepelam",
                    "Mapomanda",
                    "Papayuku",
                    "Kipos",
                    "Pulukus",
                    "Kanak",
                    "Yango",
                    "Tendep",
                    "Lyamala",
                ],
            },
            "WABAG": {
                "Wabag Urban": ["Wabag Urban",],
                "Wabag Rural": ["Tukusanda", " Aipanda", " Tambitanis", " Lakolam", " Kupalis", " Nandi", " Sakarip", " Sopas", " Kiwi", " Kaiap", " Kamas", " Kopen", " Sari", " Tore", " Teremanda", " Aipinamanda", " Lakemanda", " Sakales", " Keas", " Irelya", " Wakumare", " Lenki", " Ainumanda", " Rakamanda", " Yokomanda", " Imi", " We'e", " Birip", " Akom", " Lukirap", " Waimerimanda", " Lakopen", " Yailingis", " Tumbilam", " Aiyokolam", " Keas", " Komaites", " Kiwi No.2", " Amala", " Manjope", " Pandam", " Wanomanda", " Makapumanda", " Yokota", " Pealam",],
                "Maramuni Rural": ["Biak", " Net Nai", " Pasalaugus", " Wailep", " Tongori", " Kaematok", " Wangalongen", " Neliyakou", " Ilya", " Poreak", " Warakom", " Pokale", " Penale",],
            },
            "WAPENAMANDA": {
                "Wapenamanda Rural": ["Awas", " Tubiakores", " Aipanda", " Kaiamanda", " Tombes", " Yalis", " Yuk", " Alumbalam", " Elyaganda", " Takaipos", " Mambisanda", " Kumbas Kau", " Wares", " Rauanda", " Pina", " Yaibos", " Topakapos", " Paus", " Kuimamanda", " Kangarapos", " Pompabus", " Kanamanda", " Mondop", " Pausa", " Kumbu", " Yaramanda", " Tapend", " Yakaendis", " Unda", " Anji", " Nanai", " Walya", " Ipia", " Wapenamanda Urban",],
                "Tsak Rural": ["Pipites", " Sapos", " Komanda", " Yogos", " Tangaimanda", " Kiangapu", " Pumakos", " Raiakam", " Alumanda", " Poketamanda", " Ipali", " Imangapos", " Sapundis", " Pitipais", " Wanimas", " Londol", " Kwia",],
            },
        },
        "Southern Highlands": {
            "IALIBU/PANGIA": {
                "East Pangia Rural": ["Molo", " Alia", " Morea 1", " Morea 2", " Pokale 1", " Pokale 2", " Apenda 1", " Apenda 2", " Mele 1", " Mele 2", " Kumiane", " Pondi", " Pangia Station", " Maia", " Kauwo 1", " Kauwo 2", " Kauwo 3", " Leka/Koiya", " Yunguli", " Tindua 1", " Tindua 2", " Walapape", " Walapape", " Walupo", " Walupoi", " Mondanda",],
                "Ialibu Urban": ["Yameyame", " Topopugl 1", " Topopugl 2", " Kendal 2", " Kokogla 1", " Kendal 3", " Kendal 4", " Ialibu Station",],
                "Kewabi Rural": ["Kepiki 1", " Kepiki 2", " Wangai", " Yate", " Muli 1", " Muli 2", " Paibo", " Yarena", " Pale", " Mambi", " Munku 1", " Munku 2", " Makura 1", " Mugura 2", " Kirene", " Kumbeme 1", " Kumbeme 2", " Ponowi 1", " Ponowi 2", " Munkumapo", " Paibo 2", " Kirene 2", " Wangai 2", " Mambi 2", " Yarena 2", " Mungumapu 2", " Pale 2",],
                "Wiru Rural": ["Poloko 2", " Poloko 1", " Borona", " Koiyapu", " Poleya", " Iaro 1", " Iaro 2", " Kalane", " Kaluwe 1", " Kaluwe 2", " Weriko", " Maubinin", " Kerapali", " Tunda", " Timbikene 1", " Timbikene 2", " Pubi", " Lawe", " Timbari 1", " Timbari 2", " Wanu", " Marapini", " Undiyapu", " Yakiliyapu", " Yoka", " Kuabini", " Noiya", " Taguru", " Mamuane", " Powe", " Kengerene",],
            },
            "IMBONGGU": {
                "Ialibu Basin Rural": ["Kalipinie", " Kou", " Kero 1", " Kero 2", " Poneglama", " Kongibugl 1", " Kongibugl 2", " Bimbene 1", " Bibine 2", " Kapoglpopilie", " Yombi 1", " Yawalangil 1", " Topel/Kopri", " Lepera", " Pakulge", " Yawalangil 2", " Kendal 1", " Iombi 2", " Kalano", " Maral",],
                "Imbonggu Rural": ["Kisenapoi", " Moka 1", " Orei 1", " Kumunge", " Beechwood 1", " Koropangi", " Beechwood 2", " Kume 1", " Kume 2", " Tona", " Piambil 1", " Piambil 2", " Parare 1", " Papare 1/Nagop 1", " Papare 2/ Nagop 2", " Orei 2", " Moka 2", " Kisenapoi 2/Puglupiri", " Tukupangi", " Nagop 3",],
                "Lower Mendi Rural": ["Endowa", " Tepe/Eskamb", " Sumia 1", " Sumia 2", " Yore 1", " Yore 2", " Tutam", " Yebi 1", " Yebi 2", " Aisaisa", " Pundia/Limbiali", " Megi", " Onne", " Yaken 1", " Yebi 3", " Omai", " Pororo", " Mil/Warip", " Sumia 3", " Yaria", " Kiberu", " Yaken 1", " Bui-iebi", " Lumbi/Tutam", " Una/Kos", " Pinj",],
            },
            "KAGUA/ERAVE": {
                "Erave Rural": ["Galu", " Tiripi", " Batri 1", " Batri 2", " Iamorubi", " Erave Station", " Koyari", " Tsimberigi (Tiabili)", " Kerabi", " Barowai", " Tiri", " Waragu", " Waposali", " Kele", " Puputau", " Sirigi", " Sopisa", " Menekiri", " Marorogo", " Waro", " Yanguli 1", " Yanguli 2", " Pawabi 1", " Pawabi 2", " Sau", " Kati", " Pawale", " Niae",],
                "Kagua Rural": ["Alopea", " Aboma", " Kagua Station", " Karia (Aliya)", " Katiloma", " Kira", " Koalilombo", " Andari", " Mapuanda", " Marili", " Mendo", " Mungaro", " Pawabi", " Porane", " Raku", " Rogoma", " Rongka", " Rumbalere", " Sumbura", " Wakiapanda", " Tulire", " Yalu", " Yango", " Yame", " Alenda",],
                "Kuare Rural": ["Epapini", " Ita", " Kalawida", " Kaporoi", " Karanda 1", " Karanda 2", " Karavere", " Kilipini 1", " Kola", " Kuwi", " Lapoko", " Tindane/Kolopi", " Tulupari", " Agu Limba", " Mapiro 1", " Mapiro 2", " Kupia",],
                "Aiya Rural": ["Aboba", " Lameriga", " Lapi", " Bata", " Maipata", " Pira", " Raguare", " Roalamanda", " Sumi", " Uma", " Usa", " Yanguri 1", " Yanguri 2", " Akuna", " Lagiri-Baita", " Pawayamo", " Puti", " Wasa", " Wasuma", " Kengawe", " Ripu/Maguta", " Sugu", " Sare",],
            },
            "MENDI": {
                "Karints Rural": ["Puinj 1", " Puinj 2", " Map 1", " Map 2", " Wambip 1", " Imila", " Melant", " Humbura 1", " Humbura 2", " Tulum 1", " Tulum 2", " Posulim", " Pembi", " Kusi", " Pingirip", " Semb Marep 1", " Marep 2", " Paip", " Mulim", " Heip", " Bela", " Kamberep", " Was 1", " Was 2", " Topa", " Hum",],
                "Lai Valley Rural": ["Topa", " Komp", " Tugup 1", " Kip 1", " Kip 2", " Tumia", " Munihu Station", " Maip 1", " Kuianda", " Soba 1", " Soba 2", " Nol", " Injet", " Tubip 2", " Kema", " Nengia", " Imilhoma", " Wariba", " Marara", " Sol", " Honda", " Monta", " Maip 2", " Soba", " Mariste", " Waip", " Angoma Mariste", " Sombol", " Pendia",],
                "Mendi Urban": ["Teta", " Wakwak/Umbimi", " Longo/Kave", " Mes Wa", " Kumin/Kambiakip", " Tubiri", " Poromanda/Unjamap", " Tente 1", " Tente 2", " Mendi Town", " Wakwak Urban",],
                "Upper Mendi Rural": ["Abua 1", " Abua 2", " Pongai", " Wagia", " Koen", " Enep/Dimifa", " Kuma 1", " Kundaga", " Birop 1", " Birop 2", " Birop 3", " Karel 1", " Karel 2", " Kuma 2", " Egari", " Mogol", " Kelta", " Nene", " Abua 3", " Mungura", " Sol", " Kambai 1", " Kambai 2", " Waparaga", " Komia 1", " Komia 2", " Yare", " Semera",],
            },
            "Nipa-Kutubu District": {
                "Lake Kutubu Rural": ["Dugubali", " Gena'abo", " Damayu", " Irika", " Harabiyu", " Herebo", " Inu", " Gesege", " Iorogobayu", " Manu/Ward", " Gobe", " Hidinihia", " Fiwaga", " Tugiri", " Kafa", " Yalanda", " Sisibia", " Baguale",],
                "Mount Bosavi Rural": ["Ludesa", " Bona", " Waragu", " Bobole", " Filisado", " Dodomona", " Banisa", " Wanagesa", " Fogomayu", " Musula", " Lake Campbell", " Gunigamo", " Igiribisado",],
                "Nembi Plateau Rural": ["Uba No. 12", " Uba No. 12", " Embi 1", " Embi 2", " Pomberel 1", " Pomberel 2", " Tapua 13", " Tapua 14", " Karemela 1", " Askam 2", " Askam 1", " Tegipo 1", " Tegipo 2", " Enjua 1", " Enjua 2", " Hulal 1", " Hulal 2", " Pinja 1", " Pinja 2", " Semin 1", " Semin 2", " Sepera 1", " Sepera 2", " Sepera 3", " Sop Mul", " Hupa 3",],
                "Nipa Rural": ["Soi", " Nipa H/School", " Haralinja", " Almanda 1", " Almanda 2", " Sesenda 2", " Sesenda 1", " Soi'l 2", " Shumbi 2", " Shumbi 1", " Ebil 2", " Ebil 1", " Eganda 3", " Erepi", " Ungubi 2", " Egenda 2", " Emb", " Suma 1", " Suma 2", " Hepinja 1 & 16", " Poiya 7", " Ingin 2", " Ingin 1", " Merep", " Erep 5", " Tupip", " Poiya 6", " Nipa Station", " Ungubi 1", " Egenda 1", " Pulim 3", " Pulim 2", " Pulim 1", " Kware 2", " Kware 1", " Komea 2", " Komea 1", " Kombela", " Injip 2", " Injip 1", " Puril Mission Station",],
                "Poroma Rural": ["Kongu", " Tindom 2", " Mondisarep", " Kar", " Utupia", " Undu Kopa", " Farata", " Kusa", " Det", " Onja-Rundu", " Waramesa", " ombadi", " Kapit/Kum 11", " Purtre/Kum 12", " Wanga", " Mato", " Nenja", " Poroma Station", " Kupipi", " Poroma", " Toiwaro", " Tamenda", " Kunjulu", " Kar 11",],
            },
        },
        "Western Highlands": {
            "DEI": {
                "Dei Rural": ["Muglamp.1", " Muglamp.2", " Mun", " Gumanch.1", " Gumanch.2", " Kuk 1", " Mopi", " Keta", " Keraldong", " Kumbunga", " Moga", " Pung", " Rauna", " Kamund", " Kenembomuka", " Kenabuga.1", " Bitam", " Kindal", " Palgi", " Komapana", " Kelem.1", " Tigi.2", " Kenabuga.2", " Klenembo", " Tigi.1",],
                "Kotna Rural": ["Nunga 2", " Keremunga", " Romonga", " Keya", " Bengel", " Kembuki", " Kurunga", " Rang", " Rulna", " Minjim", " Kentkina", " Rombanga",],
            },
            "HAGEN CENTRAL": {
                "Mount Hagen Rural": ["Kumunga", " Kiliga", " Kelua 2", " Kuguma", " Kelua 1", " Kik", " Tega", " Koglamp", " Tiling", " Kingalrui 1", " Korobuk", " Biaprui", " Keltiga", " Gabina", " Palim 2", " Palim 1", " Koge 1", " Koge 2", " Minimp", " Ogelbeng", " Anga", " Pulgimp", " Mulga", " Kitiga", " Pungaminga", " Kogmul", " Pits", " Togoba No.1", " Kagamuga", " Kingaldui 2", " Baisu", " Wimbuka", " Kilam", " Kenta", " Koibuga", " Kagamuga Rural", " Kugl", " Waninga", " Kuguramp", " Togoba 2",],
                "Mount Hagen Urban": ["Kagamuga Urban", " Mt. Hagen Town",],
            },
            "MUL-BAIYER": {
                "Mul Rural": ["Bukapena", " Kileg.1", " Kileg.2", " Kileg.3", " Kalenga 1", " Kalenga 2", " Wurup", " Kwinga.1", " Kwinga.2", " Kwinga.3", " Kwinga.4", " Bita", " Kum", " Mabulga.1", " Mabulga.2", " Mabulga.3", " Mambuga.4", " Rugli.1", " Rugli.2", " Keregamp", " Kopalge", " Kumdi", " Namba", " Murip", " Kiliga", " Minimp", " Koibuga.1", " Koibuga.2", " Koibuga.3", " Koibuga.4", " Angiki.1", " Angiki.2", " Kilimp", " Wara.1", " Wara.2", " Wara.3", " Kogl", " Kwip.1", " Kwip.2", " Tondomong.1", " Tondomong.2", " Tondomong.3", " Balk.1", " Balk.2", " Balk.3", " Balk.4", " Ebuga",],
                "Baiyer Rural": ["Pokotapugl", " Manjip", " Sanap", " Keluape.1", " Keluape.2", " Lyaporambo.2", " Lyaporambo.1", " Kaleta", " Kuipbaut.1", " Kuipbaut.2", " Rolga", " Endeman", " Jukuna", " Tapikama.1", " Tapikama.2", " Kaliponga", " Yaramanda.1", " Yaramanda.2", " Yaramanda.3", " Pakalts.1", " Pakalts.2", " Dalapana.1", " Dalapana.2", " Dalapana.3", " Kulimbu.1", " Kulimbu.2", " Mandawasa.1", " Mandawasa 2", " Kalepale", " Simunga", " Kanan.1", " Kanan.2", " Yakasmanda.1", " Yakasmanda.2", " Iki 1", " Iki 2", " Dekenapona", " Antengena. 1", " Keld", " Gelg.1", " Gelg.2", " Kul", " Pila", " Opa", " Ruti", " Tinsley Health Centre", " Baiyer Station",],
                "Lumusa Rural": ["Lai.1", " Rombau", " Mondaiyanda", " Laiyakama.2", " Nekerapa.1", " Negarada 2", " Negerapa.3", " Pinyapaisa.1", " Pinapaisa.2", " Mano", " Minigiwa", " Wangumali", " Kumbakosa.1", " Kumbakosa.2", " Yangomanda", " Sinjumanda", " Jikama", " Kunjilama", " Kakemali.1", " Kakemali.2", " Kakemali.3", " Keimanda", " Kugu/Kumasina", " Ipiylisina Kumasina 2", " Indiypendent/Kumasina 3",],
            },
            "TAMBUL/NEBILYER": {
                "Mount Giluwe Rural": ["Gihamu 1", " Gihamu 2", " Muga", " Paiakona.1", " Paiakona.2", " Toroika", " Kamunga 1", " Kamunga 2", " Tomba", " Tsingibai.1", " Tsingibai.3", " Tsingibai 2", " Tsingibai 4", " Karapangi", " Pulgumong", " Kikuwa", " Pommboli", " Kumbaipulg", " Maltaka", " Kamindi", " Pagapena 1", " Pagapena.2", " Pagapena 3", " Oiapulg. 1", " Oiapugl.2", " Awabo", " Laiagam 1", " Laiagam 2", " Malke 1", " Malke 2", " Kagop 1", " Kagop 2", " Kagop 3", " Alkena 1", " Alkena 2", " Alkena.3", " Iapauga", " Wambul 1", " Wambul 2", " Kopine", " Bonga.1", " Bonga.2", " Koroka", " Kerepia.1", " Kerepia.2", " Kerepia.3", " Tamal", " Palnol", " Gia.1", " Gia.2", " Kombolga", " Marapugl",],
                "Nebilyer Rural": ["Pabarabuk", " Papikola", " Oamul", " Kupeng", " Kogmul", " Malda", " Teka 1", " Teka 2", " Kumbaia", " Koibuka", " Yumbiga 1", " Yumbiga 2", " Kaige 1", " Kaige 2", " Iriwaipa", " Gomi", " Tapia", " Korkor", " Paraka", " Alimp 1", " Alimp 2", " Kumumbaga", " Wagil", " Agega", " Olk", " Koibuga", " Pangatibuk", " Dumakona", " Kongra", " Kend", " Arowa", " Wairipi", " Keranum", " Kongmul",],
            },
        },

        "Hela": {
            "Komo-Magarima": {
                "Hulia Rural": ["Alua/Kambi", " Kela", " Uruma", " Piangwanda", " Puju", " Tigibi 1", " Wabia 2", " Wabia 1", " Iangome", " Damita 1", " Hol'la", " Dimu", " Homa Pawa", " Honaga", " Lau'u", " Pagale", " Yabagaru", " Davi Davi", " Kuyali", " Yarale", " Hogombe", " Tigibi 3", " Dauli 1", " Damita 2", " Dauli 2", " Dauli 3", " Peri", " Wabia 2", " Wabia 3", " Hubi Yabe", " Takipupi",],
                "Komo Rural": ["Atare", " Tumbite Ayagare", " Egauwi", " Eanda", " Pami", " Egaipa", " Ayagate", " Kulu Nogoli", " Emberali", " Padua", " Kungu", " Agu/Tani", " Laiyako", " Para", " Laite", " Mindirate", " Pura", " Turubi Tawanda", " Tumbite Ligame", " Yandare", " Komo Rural Station", " Gangulu", " Mbeloba", " Arali Kapale", " Tagite", " Kulu Pupa",],
                "Upper Wage Rural": ["Homaria", " Tuya", " Mabia", " Tengo", " Tabala", " Wambia", " Ugu 1", " Ugu 2", " Yanagere", " Yuhoma", " Yongo", " Ariaka", " Panduaga 1", " Panduaga 2/Piangai", " Tawanda", " Liuliu", " Tundaka", " Yongale", " Margarima", " Pipi", " Kungu",],
                "Lower Wage Rural": ["Hombola", " Sebiba", " Wabal", " Henep", " Ombal", " Songura", " Solapaem", " Kapendaka", " Mabera", " Weya", " Waip", " Mariste", " Hiri", " Olaem", " Posora", " Yambaraka", " Wabulaka", " Olaem", " Pingi", " Hone", " Keme",],
            },
            "KOROBA KUPIAGO": {
                "Awi-Pori Rural LLG": ["Ti'iba", " Tapayamapu", " Kuranda 2", " Kuranda 1", " Tade 2 (Wagia)", " Tade 1", " Wagala", " Eganda", " Ayuguali 1", " Ayugali 2", " Wanga Pareya", " Tugu", " Hamuta", " Puyena", " Kewe 1", " Kewe 2", " Embe", " Wanga", " Paga", " Hawinda 1", " Hirubala", " Hawinda 2", " Kutage", " Waluni/Tarane", " Hirutege",],
                "Lake Kopiago Rural": ["Haredege", " Arou", " Hagini/Poko", " Horale/Karuka", " Aluni", " Agali/Bulako", " Hirane/Barae", " Alukuni", " Kopiago Station", " Suwaka", " Dolowa/Hukuni", " Dilini", " Peragola", " Wagia", " Usai/Malieli", " Wiski", " Wanakipi", " Ambi", " Yokona",],
                "North Koroba Rural": ["Kelabo 1", " Kelabo 2", " Kudjebi", " Hawinda", " Aienda", " Kagoma", " Warukumu", " Kenamo", " Piangonga 2", " Piangoga 1", " Jakuabi", " Levani", " Betege 2", " Ereiba 2", " Ereiba 1", " Kereneiba", " Betege 1", " Hujanoma 2", " Hujanoma 1", " Teria 2", " Teria 1", " Yatemali", " Yaluba 1", " Yaluba 2", " Umimi", " Topi",],
                "South Koroba Rural": ["Magara 1", " Erebo", " Magara 1", " Hedemari 1", " Hedemari 2", " Humburu 1", " Humburu 2", " Kakarane 1", " Kakarane 2", " Gunu 1 Council - (Mitago Atali)", " Gunu 2 Council - (Kulupara)", " Pandu - Council (Peter Wau Tapaya)", " Maria", " Andiriai 1 - Council ( Urulu Eka)", " Koroba Station - Council (Andapa)", " Andiriai 2 - Council (Ignatus Ingiti)", " Kundugu", " Tangimabul", " Tumbite", " Pabulumu 1", " Egele 1", " Egele 2", " Mbuli",],
            },
            "TARI/PORI": {
                "Hayapuga Rural": ["Hare", " Munima / Wenani", " Tani Walete / Taunda", " Halimbu", " Tobani / Halimbu 2", " Hambuari", " Linabeni", " Peri", " Kutama", " Tindima", " Hiwanda", " Mindiratogo / Hiwanda 2", " Telabo", " Hapono", " Undupi", " Gugubalu / Hundupi", " Warolo", " Teni (Hundupi)", " Agau / Teni 2", " Idauwi / Teni 3", " Yapira / Idawi",],
                "Tagali Rural": ["Halongali", " Hava", " Ula", " Peta-Porogorali", " Munima", " Karita 1", " Karita 2", " Henganda 1", " Henganda 2", " Mbuli", " Eganda", " Kongiabi", " Kayakali", " Paijaka 1", " Paijaka 2", " Hariba", " Tulupu Manopi", " Pii Nakia", " Mt. Kare 1", " Mt. Kare 2",],
                "Tari Urban": ["Piribu", " Paipali / Piribu 2", " Kikita 1", " Kikita 2", " Kupari", " Yulubate/Tari 1", " Tari 2 / 3", " Pai", " Tari Urban (4)",],
                "Tebi Rural": ["Tindiparu", " Itapu", " Hangapo 1", " Hangapo 2", " Andawale 1", " Kela 1", " Kela 2", " Pai 2", " Parinamu 1", " Parinamu 2", " Kuku 1", " Kuku 2", " Kuku 3", " Hewate 1", " Hewate 2", " Kuandi 1", " Kuandi 2", " Pai 2", " Andawale 2",],
            },
        },
        "Jiwaka": {
            "ANGLIMP/SOUTH WAGHI": {
                "Anglimp Rural": ["Kaip 1", " Kaip 2", " Kaip 3", " Polga 1", " Polga 2", " Wurup 1", " Wurup 2", " Wurup 3", " Wurup 4", " Kiliga 1", " Kiliga 2", " Ulya", " Kuki Kipan", " Panga", " Kutubugl 1", " Komon", " Kutubugl 2", " Ketepung 1", " Ketepung 2", " Rogomp 1", " Rogomp 2", " Ketepam 1", " Ketepam 2", " Ketepam 3", " Rukraka", " Papen", " Kindeng 1", " Kindeng 2", " Mugamamp", " Mandan", " Avi 1", " Avi 2", " Dopdop 1", " Dopdop 2", " Dopdop 3", " Dopdop 4",],
                "South Waghi Rural": ["Aviamp 3", " Aviamp 4", " Aviamp 2", " Aviamp 1", " Kauwi", " Kabagang", " Kungar 2", " Kungar 1", " Kudjip Plnt", " Kudjip Hospital", " Puri", " Kurumul 1", " Kurumul 2", " Tombil 1", " Tombil 2", " Kamang 1", " Kamang 2", " Anginmol", " Ngunba Tsents", " Gabinal", " Alua", " Gagwa / Dup", " Kamang 3 / Mondomil", " Olubus", " Pabamil", " Tsigmil", " Begbe", " Tumba", " Numgil", " Kugmar", " Gugmar", " Djek", " Yeu 1", " Mt. Au", " Ambopane", " Yeu 2", " Olate", " Palti", " Tesa", " Wusinge", " Meru", " Tandambak", " Tun", " Kupa", " Djeck 2", " Minj Mu", " Kia", " Minj Urban",],
            }, "JIMI": {
                "Jimi Rural": ["Mogini", " Koriom", " Kwiop", " Togoban", " Kwima", " Kupeng", " Kompiai", " Tswenkai", " Bokopai", " Yumbigema", " Koinambe", " Kandabiamb", " Tsembant", " Gunjiji", " Gondobend", " Waim", " Tsarep", " Marent", " Tsendiap", " Tumbunki", " Runimp", " Wum", " Tsenga", " Maikmol", " Toli", " Ongolmol", " Kaul", " Karap", " Manemp", " Magin", " Korenju", " Tabibuga", " Tsingoropa", " Kwipun", " Telta", " Menjim No.2",],
                "Kol Rural": ["Maipka/Kol Station", " Wamku", " Kuimin", " Meginapol", " Mongom", " Maime", " Kunomol", " Kuma", " Gebal", " Iwaramul", " Dungo", " Bubulsinga", " Omun", " Kalimbkul", " Bubkale", " Bial", " Kosap", " Kurunga", " Kaulo", " Mokuna", " Yambdop", " Waramanz 1", " Waramanz 2", " Gakip", " Junk/Arbid",],
            }, "NORTH WAGHI": {
                "North Waghi Rural": ["Kimil 1", " Kimil 2", " Bung 1", " Koskala 2", " Koskala 1", " Kakinjep", " Molka 1", " Kwiena 1", " Kwiena 2", " Dumbola 1", " Talu 1", " Kendu 1", " Bolimba 1", " Bung 2", " Bung 3", " Koskala 3", " Kakinjep 2", " Molka 2", " Dumbola 2", " Talu 2", " Kendu 2", " Bolimba 2", " Kakinjep 3", " Banz Town",],
                "Nondugl Rural": ["Bamna/Bamuna 1", " Bamna/Bamuna 2", " Domil 1", " Domil 2", " Kapalku 1", " Kapalku 2", " Kaming 1", " Kombulno 1", " Kombulno 2", " Kombulno 3", " Kumbal 1", " Kumbal 2", " Milep 1", " Milep 2", " Munumul 1", " Munumul 2", " Munumul 3", " Nondugl 1", " Nondugl 2", " Ngumbkora", " Onil 1",],
            },
        },
    },
    "NEW_GUINEA_ISLANDS": {
        "East New Britain": {
            "GAZELLE": {
                "Central Gazelle Rural": ["Napapar No.1", " Napapar No.2", " Napapar No.3", " Napapar No. 4", " Napapar No. 5", " Vunagogo", " Takekel", " Kadakada", " Rakunai", " Latlat", " Navunaram", " Tavui-Liu", " Malmaluan", " Karavia No.I", " Karavia No.2", " Tavilo Settlement", " Talakua", " Kerevat Township", " Tinganagalip", " Kerevat Urban",],
                "Inland Baining Rural": ["Alakasam", " Lamarain", " Raunsepna (Qaqet speakers)[3]", " Yayami", " Malasaet", " Burit", " Manapki", " Liaga", " Kereba", " Vudal", " Vunapalading No.1", " Vunapalading No.2", " Rangulit", " Lamarainam", " Mandressem Sett", " Lulit", " Radingi", " Kamanakam (Qaqet speakers)[3]", " Ragaga", " Rhungagi", " Kadaulung No.2 (Taulil language speakers)", " Vungi", " Gaulim", " Kainagunan", " Ivere (Kairak language speakers)", " Malabonga (Kairak language speakers)[4][5]",],
                "Lassul Baining Rural": ["Poniar/Kanako", " Mobilum", " Takis", " Nangasn", " Traiwara", " Lassul", " Puktas", " Karo", " Matanakunai", " Mandrambit (Simbali language speakers)[3][4]", " Wilambemki/Poiniara", " Panarupkap", " Laan", " Yalom", " Komgi", " Naviu/Mamapit", " Open Bay Timbers", " Walmetki (Qaqet speakers)[5]", " Kolopom Settlement", " Warakindam", " Morokindam", " Mobisberg Plantation",],
                "Livuan-Reimber Rural LLG": ["Rababat", " Vunairoto", " Kabakada", " Nabata", " Toboina", " Raluan No.3", " Putanagororoi", " Vunalir", " Ratongor", " Vunadavai", " Lungalunga", " Mei-Livuan", " Volavolo", " Kuraip", " Vunalaka", " Vunakalkalulu", " Taranga", " Raburbur", " Rakotop", " Ramalmal", " Vunailaiting", " Vunakainalama", " Towaleka", " Ramale", " Kikitabu", " Vunaulaiting", " Totovel", " Rakada", " Vunapaka",],
                "Vunadidir-Toma Rural LLG": ["Rabagi No.1", " Rabagi No.2", " Rapitok No.1", " Rapitok No.2", " Rapitok No.3", " Rapitok No.4", " Ratavul", " Vunakabi", " Tanaka", " Taulil No.1 (Taulil language speakers)", " Taulil No.2 (Taulil language speakers)", " Vunadidir", " Bitakapuk No.1", " Bitakapuk No.2", " Tagitagi No.1", " Tagitagi No.2", " Wariki No.1", " Wariki No.2", " Wariki No.3", " Wariki No.4", " Viviran No.1", " Viviran No.2", " Vunakaur", " Baie", " Papalaba", " Vunararere", " Tamanairik No.1", " Tamanairik No.2", " Rabata", " Gunanur-Gbone", " Raim", " Rapitok",],
            },
            "KOKOPO": {
                "Bitapaka Rural": ["Rabagi No.1", " Rabagi No.2", " Rapitok No.1", " Rapitok No.2", " Rapitok No.3", " Rapitok No.4", " Ratavul", " Vunakabi", " Tanaka", " Taulil No.1", " Taulil No.2", " Vunadidir", " Bitakapuk No.1", " Bitakapuk No.2", " Tagitagi No.1", " Tagitagi No.2", " Wariki No.1", " Wariki No.2", " Wariki No.3", " Wariki No. 4", " Viviran No.1", " Viviran No.2", " Vunakaur", " Baie", " Papalaba", " Vunararere", " Tamanairik No.1", " Tamanairik No.2", " Rabata", " Gunanur", " Raim", " Rapitok",],
                "Duke of York Rural": ["Makada/Nagaila", " Molot", " Maren", " Butlivuan", " Waira", " Nabual", " Inolo", " Kumaina", " Kabilomo", " Urakukur", " Kababiai", " Mualim", " Virian", " Palpal", " Utuan", " Karawara", " Mioko", " Urukuk", " Pirtop", " Nakukur No.1 & 2", " Rakanda",],
                "Kokopo-Vunamami Urban LLG": ["Karavi", " Vunamami", " Bitarebarebe", " Vunabalbal", " Gunanba", " Tinganavudu", " Malakuna", " Ulagunan", " Livuan", " Ramale", " Bitagalip", " Kabakaul", " Takubar", " Palnakaur", " Ulaulatava", " Vunapope", " Ngunguna", " Gunanur", " Palavirua", " Vunamami No.2", " Kokopo Town",],
                "Raluana Rural": ["Raburua", " Bitatita", " Nugvalian", " Raluana", " Barovon", " Ialakua", " Vunatagia", " Ranguina", " Bitabaur", " Vunamurmur", " Vunaulul", " Ralalar", " Turagunan", " Kunakunai", " Ngatur", " Tinganalom", " Nanuk", " Balanataman", " Ravat", " Talakua",],
            },
            "POMIO": {
                "Central-Inland Pomio Rural LLG": ["Parole", " Malakur", " Kerkernena", " Baien (West)", " Galue", " Marmar", " Pomio", " Olaipun", " Sali", " Bovalpun", " Kalakru", " Kawa", " Tokai", " Matong", " Buka", " Pulpul", " Pakia", " Mile", " Mukulu", " Malvoni", " Muela", " Bago", " Pakaraman", " Birigi", " Bagitave", " Kapkena", " Tuki", " Lakiri", " Marmu", " Masuari", " Manigugule", " Kavale", " Gelioi",],
                "East Pomio Rural": ["Lamarain", " Long", " Hoya", " Kaukum", " Milim", " Guma", " Klampun", " Sampun-Tagul", " Teimtop-Wawas", " Bain", " Raolman", " Ivai", " Setwei",],
                "Melkoi Rural": ["Makmak", " Waipo", " Simi", " Tavolo", " Meletong", " Uvol", " Einahelei", " Ruachana", " Mininga", " Maso", " Esletenae", " Mainge", " Atu", " Haumakia", " Poio", " Pilematana", " Lausus", " Kenmininga", " Warale",],
                "Sinivit Rural": ["Rieit", " Arabam", " Maranagi", " Reigal", " Sanbum", " Marambu", " Lat", " Gar", " Merai", " Ili", " Karong", " Sunam", " Marunga (Mali language speakers)[3]", " Kavudemki (Simbali language speakers)[4][5]", " Tol", " Sikut", " Ivon/Gore", " Laup", " Kadalung No. 1",],
                "West Pomio-Mamusi Rural LLG": ["Gugulena", " Malmal", " Manginuna", " Totongpal", " Kaiton", " Puapal", " Rowan/Malo", " Pomai/Mu", " Poro/Salel", " Irena", " Kangelona", " Mauna", " Lau", " Bairaman", " Tolel", " Maitao", " Serenguna", " Paliavulu", " Viosopuna", " Pokapuna", " Bili", " Pakia", " Okempuna", " Kaitoto", " Mapuna", " Peling", " Aona", " Yauyau", " Kaikou", " Kinsena", " Ulutu", " Kerongkorona", " Sivaona", " Pepeng",],
            },
            "RABAUL": {
                "Balanataman Rural": ["Ratung", " Pilapila", " Karavia", " Ratavul", " Volavolo", " Nonga", " Tavui No.1", " Tavui No.2", " Tavui No.3", " Malaguna No.1", " Malaguna No.2", " Malaguna No.3", " Iawakaka", " Rapolo", " Raluan No.1", " Raluan No.2", " Tavana", " Valaur", " Nonga Base Hospital",],
                "Kombiu Rural": ["Baai", " Nodup", " Matalau", " Rakunat", " Rabuana", " Korere 1", " Korere 2", " Talvat", " Matupit 1", " Matupit 2", " Matupit 3", " Matupit 4", " Matupit 5",],
                "Rabaul Urban": ["Rabaul Town",],
                "Watom Island Rural": ["Rakival", " Taranata", " Valaur", " Vunabuk", " Vunakabai", " Vunaulaiar",],
            },
        },
        "Manus": {
            "MANUS": {
                "Aua Wuvulu Rural": ["Auna 1", " Onnei 1", " Aua Island 1", " Aua 2", " Onnei 2", " Auna 2",],
                "Balopa Rural": ["Mouk", " Lipan", " Sone", " Parioi", " Buiat", " Baon", " Solang", " Rei", " Lako",],
                "Bisikani-Soparibeu Rural LLG": ["Salien", " Nihon", " Kali", " Maso", " Matahai", " Salapai", " Lessau", " Harengau", " Jowan 1", " Jowan 2", " Nyada", " Levei", " Sori 2", " Sori 1",],
                "Pomutu-Kurti-Andra Rural LLG": ["Ponam", " Tulu 1", " Tulu 2", " Lahapau", " Bundralis C/Mssn", " Lehewa", " Saha", " N'drehet", " Liap", " Derimbat", " Andra Island", " Souh", " Mundrau", " Patlok", " Mundripureu", " Pundru", " Wamandra", " Ndrumunun",],
                "Lelemadih-Bupichupeu Rural LLG": ["Malapang", " Horan", " Powat", " Maraman", " Lapahan", " N'Drakot", " Lowa", " Ahus", " Yiringou", " Bowat 1", " Lundret", " Rossum", " Dungoumasih", " Sapon 1", " Warambei", " Pityluh", " N'drilou",],
                "Lorengau Urban": ["Lorengau Urban",],
                "Los Negros Rural": ["Loniu", " Lolak", " Lombrum", " Papitalai", " Naringel", " Riuriu", " Salamei Settlement", " Mokareng", " Lombrum Naval Base",],
                "Nali Sopat-Penabu Rural LLG": ["N'drapitou", " Soheneriu", " Kapou", " Bulihan", " Karun", " Sirrah", " Lawes", " Nohang", " Katin", " Lowaiya", " Lapap Lahan", " Maleh", " M'bunai", " Pere 1", " Patusi", " Pere 2", " Pachal", " Machaparloh",],
                "Nigoherm Rural": ["Pateku", " Lau Island", " Pihon", " Liot", " Luf", " Amik",],
                "Pobuma Rural": ["M'buke/Whal", " Bundrahei/Sabondralis", " Likum", " Babun", " Butjou", " Timoenai", " Pohowadeyaha", " Jekal", " Peli Patu",],
                "Rapatona Rural": ["Mokarah", " Hahai", " Tong", " Nauna (Nauna language speakers)", " Polobuli", " Kuluo", " Penchal", " Lenkau (Lenkau language speakers)[3][4]", " Mouklen",],
                "Tetidu Rural": ["Buyang", " Kawaliap", " Tingou", " Londru", " Pitariat", " Tawi",],
            }
        },
        "NewIreland": {
            "KAVIENG": {
                "Kavieng Urban": ["Bagail", " Kulangit", " Maiom", " Kavieng Urban",],
                "Lovongai Rural": ["Taskul",
                    "Patiagaga",
                    "Patipai",
                    "Ungakum",
                    "Tsoi",
                    "Tukulisava",
                    "Ungalik",
                    "Meterankasing",
                    "Noipuas",
                    "Sosson",
                    "Tingwon",
                    "Umbukul",
                    "Kone",
                    "Meteselen",
                    "Tioputuk",
                    "Lovongai",
                    "Meterangkang",
                    "Lungatang",
                    "Kulingei",
                ],
                "Murat Rural": ["Tasitel",
                    "Magien",
                    "Loliang",
                    "Palakau",
                    "Emira",
                    "Tench",],
                "Tikana Rural": ["Enang", " Nonovaul", " Panapai", " Kaselok", " Bagatare", " Lokono", " Ngavalus", " Paruai", " Lemakot", " Panamana", " Madina", " Kafkaf (Kuot language speakers)[2][1]: 29 ", " Namasalang", " Belifu", " Pangeifua", " Lamusmus", " Leon", " Lapai", " Lakurumau Estate",],
            },
            "NAMATANAI": {
                "Konoagil Rural": ["Kamiang, Mimias, Lenai", " Morkon (including the village of Lamoran)", " Kamparam, Kamilal, Malum Ngis", " Bakum, Silur Station", " Pukunmal, Siar (including the village of Maliom)", " Vudam Matkamlagir", " Beriota, Malumpirau", " Bakok, Maiatlik", " Lambom", " Lamassa", " Kabaman", " Kait (including the village of King)[1]", " Watpi", " Tambakar", " Siaman",],
                "Namatanai Rural": ["Palabong", " Kabanut (including Umudu village)[1]", " Matakan", " Burau", " Rasirik", " Labur", " Loloba", " Kanapit", " Pire", " Namatanai", " Salimun", " Bisapu", " Sopau", " Rativis", " Hipaling", " Himau", " Nokon", " Hipakat", " Kembeng", " Sena", " Namatanai Urban",],
                "Nimamar Rural": ["Londolovit", " Puput", " Matakues", " Lataul", " Komat", " Pangoh", " Hurtol", " Samo", " Lamboar", " Kosmaium", " Kuanie", " Malie", " Malal", " Ton", " Mahur", " Londolovit Township",],
                "Sentral Niu Ailan Rural": ["Simberi", " Tatau", " Datava", " Mapua", " Wang", " Tandis", " Lossu", " Konos", " Kimadan", " Lelet", " Dalom", " Lemeris", " Bulu", " Karu", " Komalu", " Komalapuo (including Kalagunan village)[3]", " Daun", " Messi", " Ugana", " Lamau", " Patlanga", " Panaras (Kuot language speakers)[2]: 29 ",],
                "Tanir Rural": ["Taonsip", " Fonli", " Kamunaseo", " Amfar", " Sungkin", " Put", " Nonu", " Lif", " Tefa", " Natong", " Basakala", " Balankolen", " Kamgot", " Balangit",],
            },
        },

        "Bougainville": {
            "CENTRAL BOUGAINVILLE": {
                "Wakunai Rural LLG": ["Ewara / Papana", " Auta", " Rotokas", " Rikua", " Toisiko", " Assigoro", " Usireio", " Lower Aeta/Rau Coe", " Bohi", " Wakunai Urban",],
                "Arawa Rural LLG": ["Kokoda", " Torau", " Kongara No. 1", " Kongara No. 2 (Amiaming)", " Eivo 1", " Avaipa", " Oune", " Bava Pirung", " North Nasioi", " Apiatei", " South Nasioi", " Ioro 1", " Ioro 2/Domana", " Pinei-Nari", " Ioro 3", " Arawa Urban",],
            },
            "NORTH BOUGAINVILLE": {
                "Tinputz Rural LLG": ["Tinputz", " Teop", " Taonita",],
                "Kunua Rural LLG": ["N/A"],
                "Buka Rural LLG": ["Tsitalato", " Hagogohe", " Peit", " Halia", " Haku", " Tonsu", " Buka Urban",],
                "Nissan Rural LLG": ["Tungol", " Sigon", " Pinepel",],
                "Selau-Suir Rural LLG": ["Sorom", " Hantoa", " Siara", " Rapoma", " Suir Coastal", " Suir Inland",],
                "Atolls Rural LLG": ["Carterets", " Tasman", " Mortlock", " Nuguria",],
                "Nissan Rural":
                    ["Tungol",
                        "Sigon",
                        "Pinepel",],
            },
            "SOUTH BOUGAINVILLE": {
                "Buin Rural LLG": ["Baubake", " Lugakei", " Konnou", " Makis", " Lenoke", " Wisai", " Lule",],
                "Siwai Rural LLG": ["Mukakuru", " Rataiku", " Konga", " Ruhwaku", " Korikunu", " Hari", " Tokunutu", " Huyono", " Motuna",],
                "Bana Rural LLG": ["Baitsi", " Lamane East", " Lamane South", " Telepi", " Tomau", " Velipe", " Gooreh", " Toberaki",],
                "Torokina Rural LLG": ["Burue", " Naghareghe", " Atsinima", " Rotokas", " Eivo",],
            },
        },
        "West New Britain": {
            "KANDRIAN-GLOUCESTER": {
                "Gasmata Rural": ["Amio", " Poronga", " Tesopol", " Akolet", " Aigon", " Kasuilo", " Asirim",],
                "Gloucester Rural": ["Aumo", " Aisega", " Somate", " Kilenge", " Airagilpua", " Gakiu", " Alaido", " Gurrissi",],
                "Kandrian Coastal Rural": ["Amnge", " Apalik", " Aeglep", " Kandrian", " Kaul", " Loko Nambis", " Ioudo", " Vinum", " Pilolo", " Agulo", " Ivangnga", " Naplavui", " Kandrian Urban",],
                "Kandrian Inland Rural": ["Akivru", " Gogor", " Loko Bush", " Mulus", " Miu", " Avet", " Awon", " Amumsong", " Palan", " Asengseng", " Ngolu",],
                "Kove-Kaliai Rural LLG": ["Kakota", " Talasea", " Poitala", " Kalmaruhi", " Sisili Sapulo", " Mongamonga", " Akivilik", " Lusi", " Anemsahe", " Aria No. 1", " Aria No. 2", " Mouk", " Lamogai",],
            }, "TALASEA": {
                "Bialla Rural": ["Baia", " Noau", " Ubili", " Navo", " Lolobau", " Kambaia", " Barema", " Wilelo", " Apupul", " Bialla", " Tiauru", " Sale / Malasi", " Sale / Sege", " Uasilau", " Silanga", " Pasusu", " Ubae / Bilomi", " Mangaseng", " Bialla Urban",],
                "Hoskins Rural": ["Garua", " Kwalakesi", " Hoskins", " Kalu", " Valoka", " Rikau/Siki", " Kagagu", " Malala", " Pokili",],
                "Kimbe Urban": ["Kimbe Urban",],
                "Bali-Witu Rural LLG": ["Penata", " Garomatong", " Kumburi", " Lovanua", " Mundua", " West Garove", " East Garove",],
                "Mosa Rural": ["Gamapili", " Bugal", " Kavui", " Gaopore", " Laheri", " Bebere", " Tamba", " Sarakolok", " Mosa Urban",],
                "Talasea Rural": ["Nalobu", " Boge", " Gabuna", " Bola", " Warou", " Tabekemeli", " Bulu", " Valupai", " Baliondo", " Bunga",],
            },
        },
    },

    "MOMASE": {
        "East Sepik": {
            "AMBUNTI-DREIKIKIR": {
                "Tunap-Hustein Rural LLG": ["Hotmin", " Burmai", " Arai", " Nino (Nimo language speakers)", " Itelinu", " Samo (Owiniga language speakers)", " Painum", " Wanium", " Aumi", " Pekwei", " Wanamoi", " Waniap (Ama language (New Guinea) speakers)", " Kavia (Ama language (New Guinea) speakers)", " Ama (Ama language (New Guinea) speakers)", " Yenuai (Nakwi language and Ama language (New Guinea) speakers)", " Panawai", " Imombi (Iwam language speakers)", " Mowi (Iwam language speakers)", " Iniok (Sepik Iwam language speakers)", " Paupe (Papi language speakers)", " Oum 3", " Walio (Walio language speakers)", " Nein", " Nekiei/Wusol", " Masuwari", " Sio (Sanio language speakers)", " Hanasi (Sanio language speakers)", " Moropote", " Maposi (Sanio language speakers)", " Lariaso", " Yabatawe", " Sowano", " Bitara (Berinomo language speakers)", " Kagiru (Berinomo language speakers)", " Begapuki", " Wagu", " Niksek/Paka (Niksek language speakers)", " Gahom (Bahinemo language speakers)",],
                "Ambunti Rural": ["Ambunti", " Bangus (Yelogu language speakers)", " Waskuk (Kwoma language speakers)", " Beglam (Kwoma language speakers)", " Tangujamb (Kwoma language speakers)", " Singiok", " Amaki 1", " Ablatak", " Waiwos", " Bu-Ur", " Warsei", " Ambuken", " Tauri", " Oum 1", " Oum 2", " Sanapian (Chenapian language speakers)", " Hauna (Pei language speakers)", " Waskuk (Washkuk / Kwoma language speakers)", " Kupkain", " Swagap 1 (Sogap / Nggala language speakers)", " Baku", " Yessan (Yessan language speakers)", " Prukunawi", " Yambun", " Malu", " Yerakai (Yerakai language speakers)", " Garamambu", " Yauambak", " Avatip", " Ambunti Urban",],
                "Dreikikier Rural": ["Tumam", " Moihwak", " Musungua", " Taihunge", " Mosinau", " Prombil", " Missim", " Eimul/Pelnandu", " Musindai", " Bana", " Hambini", " Waringama", " Selni", " Aresili", " Whaleng", " Yawatong", " Lainimguap", " Krunguanam", " Yakrumbok", " King", " Kofem", " Sakap", " Makumauip", " Tong", " Kumbun", " Miringe", " Yawerng", " Yambes (Yambes language speakers)", " Waim/Saiweep", " Moseng", " Pagilo", " Luwaite", " Selnau",],
                "Gawanga Rural": ["Apangai", " Yambanakor 1", " Yambinakor 2", " Asanakor", " Inakor", " Apos", " Daina", " Masalagar", " Wasambu", " Bongomasi", " Wahaukia", " Bongos", " Kuyor", " Kuatengisi", " Mamsi", " Kubriwat 1", " Kubriwat 2", " Tau 1", " Tau 2", " Wamenokor", " Sauke Aucheli", " Surumburombo",],
            },
            "ANGORAM": {
                "Angoram-Middle Sepik Rural LLG": ["Changriwa (Changriwa language speakers)", " Marambao", " Kanduanum", " Krinjambi", " Tambari", " Agrumara", " Yuarma", " Mundomundo", " Kambrindo", " Moim", " Pinang", " Magendo 1", " Magendo 2", " Ex Service Camp", " Angoram Village", " Gavieng Resett 1", " Gavieng Resett 2", " Gavieng Resett 3", " Gavieng Resett 4", " Tambunum", " Wombun", " Timbunke", " Angriman", " Mindimbit", " Kamanimbit", " Kararau", " Timboli", " Indigum", " Chikinumbu", " Chimbian", " Saui", " Kingavi", " Koiwat (Koiwat language speakers)", " Paimbit", " Angoram Urban",],
                "Karawari Rural": ["Masandanai", " Kaiwaria", " Manjamai", " Konmei", " Ambonwari", " Imanmeri (Nanubae language speakers)", " Kanjimei", " Kundiman", " Yimas (Yimas language speakers)", " Awim (Tapei language speakers)", " Yamandim (Nanubae language and Tapei language speakers)", " Imboin (Andai language speakers)", " Amongabi", " Chimbut", " Sikalum", " Yanitabak", " Latoma (Sumariup language speakers)", " Malamata", " Kotkot", " Mamri", " Sangriman", " Tungimbit", " Kambraman", " Kraimbit", " Kaningara (Kaningra language speakers)", " Govanmas", " Anganambai", " Tarakai", " Meska", " Bisorio",],
                "Keram Rural": ["Chimundo", " Kambot", " Kambot", " Kambot", " Bobten", " Korokopa", " Pusyten", " Kekten", " Buten", " Yemen", " Manu", " Kambugu", " Pamban", " Bopaten", " Langam (Langam language speakers)", " Mongol (Mongol language (New Guinea) speakers)", " Wom (Wom language (Papua New Guinea) speakers)", " Raten", " Ketro/Samban", " Baniamta", " Kamen", " Marua", " Yanboe", " Nainten", " Yar", " Bagaram", " Kivim", " Longwuk", " Mungum", " Mingnias", " Togo", " Monjito", " Likan", " Klorowom", " Sori", " Paniten", " Pataka", " Mui",],
                "Marienberg Rural": ["Kasmin 2 (Buna language speakers)", " Kasmin 1 (Buna language speakers)", " Mansep", " Ariapan (Buna language speakers)", " Boik (Buna language speakers)", " Kis", " Kaup", " Murik (Nor language speakers)", " Darapap", " Karau", " Mendam", " Bin", " Suk (Buna language speakers)", " Imbandomarienberg", " Mamber", " Watam (Marangis language speakers)", " Kopar (Kopar language speakers)", " Mabuk", " Gapun (Tayap language speakers)", " Arango", " Ombos", " Ormai", " Jangit", " Manimong", " Murken", " Pokran", " Jeta", " Binam", " Pankin",],
                "Yuat Rural": ["Kundima", " Aragunum", " Saparu", " Kinakaten", " Akuran", " Branda", " Biwat (Mundugumor language and Bun language speakers)", " Muruat", " Dimiri", " Bun (Bun language speakers?)", " Sipisipi", " Girin (Kyenele language speakers)", " Asangumut", " Mensuat", " Yambimbit", " Kambambit", " Nadvari", " Andafugun", " Yambaidog", " Olimolo", " Itipino",],
            },
            "MAPRIK": {
                "Albiges-Mablep Rural LLG": ["Iwam", " Jikunumbu", " Kulunge", " Gongiora", " Apangai", " Ami", " Amahup", " Wamsak / Amom (Abu’ Arapesh language speakers)", " Supari", " Gwoingwon", " Dahabiga", " Kwelikum", " Walahuta", " Ningalimbi",],
                "Bumbita-Muhian Rural LLG": ["Albinama 1", " Timigir", " Balif 1", " Salata", " Bonohol", " Urita", " Malohum", " Kamanakor", " Sunuhu 1", " Mui 1", " Utamup", " Ilahita 1", " Ilahita 3", " Albinama 2", " Ilahita 4", " Numangu", " Taunangas",],
                "Maprik-Wora Rural LLG": ["Klabu 1", " Klabu 2", " Jame", " Niamikum", " Kuminimbis 1", " Kuminimbis 2", " Nagipaim", " Neligum", " Maprik 1", " Kinbangua", " Wora", " Gwelikum 1", " Gatnikum", " Aupik", " Lehinga", " Ningalimbi", " Serakikum", " Maprik Urban",],
                "Yamil-Tamaui Rural LLG": ["Kombikum", " Gwarip", " Bengrakum", " Yaunjange", " Suambukum", " Kwimbu 1", " Malba 1", " Ulupu", " Yalahine", " Yamil 1", " Waikakum 1", " Waikakum 3", " Saikisi 1", " Dumbit", " Yenigo", " Mendiamin",],
            },
            "WEWAK": {
                "Boikin-Dagua Rural LLG": ["Hawain", " Niumegin", " Aring/Surumba", " Penjen/Peringa", " Siro/Wanjo", " Boikin/Dagua", " Karawap", " Yuo island", " Karasau (Est)", " Banak/Hogi", " Bogumatai/Wautogik", " Dogur", " Woginara (1)", " Woginara (2)", " Sapuain", " Urip", " Mogopin", " Maguer", " Smain/But", " Lowan", " Kauk/Balam", " Sowom", " Kotai", " Kubren",],
                "Turubu Rural": ["Mandi (Wiarumus language speakers)", " Forok", " Kep (Terebu language and Kaiep language speakers)", " Suanum / Munjun", " Samap (Elepi language and Kaiep language speakers)", " Ibab/Waibab", " Tring (Kamasau language speakers)", " Yaugib (Urimo language speakers)", " Namarep (kumin paio languages)", " Kinyare", " Kandai", " Mundagai", " Wawat", " Yamben", " Mambe (Juwal language speakers)", " Bungain (Bungain language speakers)", " Sinambali", " Manuwara", " Sir", " Putanda", " Parpur",],
                "Wewak Islands Rural": ["Biem 1 (Biem language speakers)", " Biem 2 (Biem language speakers)", " Kadowar (Biem language speakers)", " Ruprup 1 (Biem language speakers)", " Ruprup 2 (Biem language speakers)", " Wei (Biem language speakers)", " Koil 1 (Wogeo language speakers)", " Koil 2 (Wogeo language speakers)", " Vokeo 1 (Wogeo language speakers)", " Vokeo 2 (Wogeo language speakers)", " Koragur 1", " Koragur 2", " Shagur", " Rumalal", " Serasen", " Brauniek", " Mushu 1", " Mushu 2", " Walis 1", " Walis 2", " Tarawai",],
                "Wewak Rural": ["Kambagora", " Passam 2", " Passam 1", " Paliama", " Passam 3", " Marik", " Kreer", " Magon", " Simbrangu", " Suambakau", " Hambraure", " Mangrara", " Yarapi", " Numoikim", " Urindogum", " Pangaripma", " Wewak Town",],
                "Wewak Urban": ["Wewak Town",],
            },
            "WOSERA-GAUI": {
                "Burui-Kunai Rural LLG": ["Moi", " Bangwinge/Manja", " Jama No 1", " Jama No 2", " Sengo (Sengo language speakers)", " Buruwi (Burui language speakers)", " Maiwi", " Bensin", " Kwimba", " Kasimbi", " Aurimbit", " Wereman", " Yanget", " Wakiput", " Torembi No 1", " Torembi No 3", " Numagua 1", " Selei", " Miambe", " Worimbi", " Kembiam", " Marap 1", " Marap 2", " Nagusap", " Gaiborobi",],
                "Gawi Rural": ["Sapande", " Yamanumbu", " Pagwi", " Sapanaut", " Yenjinmangua", " Nyaurange", " Kandinge", " Korogu", " Sotmeri", " Indabu", " Yenchen", " Kanganamun", " Tegowi", " Parambei", " Maringei", " Aibom", " Wombun", " Indinge", " Kirimbit", " Luluk", " Timbunmeri", " Changriman", " Mari (Mari language (Sepik) speakers)", " Yembiyembi (Bisis language speakers)", " Paliagwi",],
                "North Wosera Rural": ["Kumunikum 1", " Kumunikum 2", " Kumunikum 3", " Tatemba", " Babandu", " Wisukum", " Numamaka", " Stapikum", " Talengi", " Kitikum", " Numbingei", " Gualakum", " Kwatmukum", " Sarikum", " Bukibalikum", " Jambitangit", " Wapindumaka", " Jipako", " Manjikoruwi", " Umunko", " Jipakim", " Ugutakua", " Weiko", " Dumek", " Nungwaia", " Kwanga",],
                "South Wosera Rural": ["Jikinangu", " Tiendikum", " Miko 1", " Konambandu", " Konambandu 3", " Tukwokum", " Apusit", " Nala", " Kunjingini", " Mul", " Waikamoko", " Rubukum", " Gwaiwaru", " Moundu", " Kamge", " Patigo", " Serangwandu", " Palgerr", " Nangda", " Mikau", " Wambisa", " Kuanjoma", " Pukago", " Jipmako", " Nungwaiko", " Kwalget", " Apambi", " Gupmapil",],
            },
            "YANGORU-SAUSSIA": {
                "East Yangoru Rural": ["Pachen/Karapia", " Yangoru Station", " Numboguon", " Baimuru", " Bukienduon", " Marambanja", " Sima", " Howi/Wamaina", " Kufar/Ambokon", " Siniangu/Mombuk", " Witupe1", " Koro", " Makambu", " Kiniambu", " Haripmo 1, 2, 3", " Merohombi", " Kwagwie", " Hagama", " Soli", " Parimuru", " Ambukanja", " Kiarivu", " Kworabri", " Simbomie/Sengri", " Yekimbolye 2", " Kamanja", " Witupe 2",],
                "Numbor Rural": ["Kininien", " Harua", " Wamaian", " Sasenumbohu", " Niakandogum", " Neimo", " Niagombi", " Mushuagen", " Waremba", " Nimbogu", " Abawia", " Hambuke", " Hanyak", " Numindogum", " Nangumarum", " Tangori 1", " Sasoya", " Tangori 2", " Papieng", " Huaripmogum", " Nungori", " Para", " Paparom",],
                "Sausso Rural": ["Urigembi", " Japaraka", " Yari/Nungawa", " Wiomungu", " Tuonumbu", " Munji", " Suadogum", " Rofundogum", " Bima", " Timunangua", " Werman", " Bararat", " Peringa", " Wambe", " Rabiawa (sic Rofuyawa)", " Kambaraka", " Wamagu", " Japaraka 1", " Porombe", " Segero", " Kusaun", " Mindogum",],
                "West Yangoru Rural": ["Kumun", " Kumbuhun", " Wihun (Boinam)", " Himbruolye/Buki", " Alisu", " Bonahitam", " Koboibus", " Yabamunu", " Kuragumun", " Bukitu", " Wingei 1", " Wingei 2", " Bepandu", " Yekingen & Belmo", " Sara", " Holik", " Nindibolye", " Kwaian", " Duningi", " Miambauru", " Nambari", " Malapaem", " Ilipaem", " Guningi", " Nimbihu",],
            },
        },
        "Madang": {
            "BOGIA": {
                "Almami Rural": ["Ambana", " Lilau (Lilau language speakers)", " Gawat", " Wangor", " Suaru", " Dumudum", " Turutapa", " Urumarav", " Milalimuda", " Aidibal", " Turupuav", " Murusapa", " Wadaginam", " Sirikin", " Wagimuda", " Yavera", " Yakiba", " Mugumat", " Yoro Suvat", " Dugumor", " Busip Kalelap", " Simbine", " Malala Wakor", " Amiten", " Aketa", " Aleswaw", " Manugar", " Gugubar", " Erewanem", " Ulatapun", " Tarikapa", " Muaka", " Korak (Korak language speakers)", " Ulingan", " Toto", " Medebur", " Mereman Mereman",],
                "Iabu Rural": ["Baliau Ward", " Dangale", " Koalang", " Boakure", " Abaria", " Warisi", " Dugulaba", " Budua", " Madauri", " Waia", " Jogari", " Yassa", " Kuluguma", " Boda", " Boisa",],
                "Yawar Rural": ["Marangis (Marangis language speakers)", " Kaiyan (Kaian language speakers)", " Boroi (Mbore language speakers)", " Buliva", " Daiden", " Dongan (Bosmun language speakers)", " Awar (Awar language speakers)", " Nubia", " Birap", " Rugusak", " Ambu", " Sepa (Sepen language speakers)", " Rugasak", " Banag", " Giri Tung (Giri language speakers)", " Damangap", " Kumnung", " Minung", " Kuarak", " Mikarew (Mikarew language speakers)", " Abegini", " Dinam Adui", " Apengan", " Ariangon", " Amba Arep", " Aringen Gun", " Dimuk Sirin", " Giar Wazamb", " Andeamarup", " Duapmung", " Andarum", " Ingamuk", " Barit", " Kayoma", " Bang Wokam (Gorovu language speakers)", " Sanai Taringi", " Naupi", " Gwaia Akurai", " Bogia Urban",],
            },
            "MADANG": {
                "Ambenob Rural": ["Furan / Sisiak", " Korong / Opi", " Kamba / Kuris", " Siar / Wadan", " Riwo / Nagada", " Amron / Baitabag", " Budad Haven", " Gegeri Wangar", " Ward 10", " Bagupi / Saruga", " Abar / Labting", " Baiteta / Hipondik", " Balima / Kusubar", " Aiyap / Malac", " Sein", " Bahor Sahgala", " Ward 18", " Amele / Omuru", " Bau / Umun", " Bemahal / Fulumu", " Arar/ Maneb", " Asikan/ Utu",],
                "Madang Urban": ["Madang Urban",],
                "Transgogol Rural": ["Melowaba", " Gumaru Mawan", " Amaimon (Amaimon language speakers)", " Baisarik", " Bemari Waguma", " Garinam", " Barum", " Buroa", " Butade", " Kagi", " Ensuda", " Bai", " Dawa Bigawa", " Babaran Imam", " Kosilanta", " Abiya",],
            },
            "MIDDLE RAMU": {
                "Arabaka Rural": ["Gokta", " Jakipuat", " Atiapi", " Diam", " Moibu", " Gragebu", " Nodabu", " Paibu", " Watabu", " Grengabu", " Chungribu", " Limbubu", " Kwanga", " Askunka", " Misingi", " Nambringi", " Bumbera", " Bunungum", " Gosingi", " Brokoto", " Akurukai (Akrukay language speakers)", " Wawapi", " Ipokondor", " Rarapi", " Awam", " Akavangu (Nend language speakers)", " Astangu", " Atemble (Mand language speakers)", " Iporaitz", " Iragarat", " Anamunk", " Apanam", " Jogoi", " Sotobu",],
                "Josephstaal Rural": ["Ingawaia", " Bogen", " Osum", " Avunmakai", " Evuar", " Mandugar", " Arimbugor", " Kisila / Simbar", " Iabaranga", " Kangarangat", " Yamamuk", " Inasi", " Amjaivuvu", " Angasa", " Kaibugu", " Ivarai", " Kinbugor", " Aragnam", " Ambok", " Kamambu", " Sangur Sangur", " Munimatamam", " Atitau", " Arimatau", " Abasakul", " Kokomasak",],
                "Simbai Rural": ["Ainong", " Momuk", " Kaironk", " Fongoi", " Fundum", " Gubun", " Nugunt", " Koki", " Yambunglem", " Kerevin", " Kurumdek", " Kandum", " Tinam", " Aigram", " Kampaying", " Babaimp", " Kumbruf", " Tsungup",],
                "Kovon Rural": ["Salemp", " Sonvak", " Aranam", " Hangaple", " Aradip", " Sangapi", " Dangu", " Gebrau", " Tingi", " Yilu", " Mamusi", " Fitako", " Gubaine", " Wulim", " Yahl",],
            },
            "RAI COAST": {
                "Astrolabe Bay Rural": ["Kul (Siroi language speakers)", " Bangri", " Bang (Sam language speakers)", " Bongu", " Boram", " Male", " Lalok", " Kulel", " Saipa", " Bom", " Jamjam", " Kwato", " Erima", " Ato", " Ileg",],
                "Naho Rawa Rural": ["Gurumbo", " Mungoui", " Ranara", " Boro", " Tauta", " Barim", " Goiro", " Niningo", " Numbaiya", " Gomumu", " Saranga", " Serengo", " Kikipe", " Wamunde", " Wari", " Butemu", " Durukopo", " Senei", " Gumbarami", " Sewe",],
                "Rai Coast Rural": ["Gauss (Bonga), Malalamai, Gali and Bonga. Bonga and Malalamai speak the one language - the Bonga Malalamai language while Gali speak Gali language.",],
                "Nayudo Rural": ["Tapen", " Gabutamon", " Boana", " Wadabong", " Kwembum", " Weskokop", " Yawangoba/Yata", " Bambu", " Eyengowo/Ayome", " Gumase", " Gwarawon", " Miok", " Tariknan", " Mibu",],
            },
            "SUMKAR": {
                "Karkar Rural": ["Yau/Badilu", " Matiu", " Tarak", " Kaviak", " Kinim Station", " Narer", " Urugen", " Bangme/Langlang", " Gial", " Tugutugu", " Dimer", " Kaul 1", " Kaul 3", " Mapor", " Muluk", " Kubam", " Katom", " Pain", " Komoria", " Dangsai", " Biu", " Did", " Boroman", " Kurum", " Liloi", " Marup", " Kevasop", " Mangar", " Bafor", " Kuduk", " Bujon/Kurumtaur", " Marangis/Mom", " Keng/Mater",],
                "Sumgilbar Rural": ["Bunbun (Brem language speakers)", " Erenduk", " Murukanam (Brem language speakers)", " Malas (Manep and Waskia language speakers)", " Imbab (Yamben language speakers)", " Mirap (Gavak language speakers)", " Karkum (Gavak language speakers)", " Sarang", " Basken (Gavak language speakers)", " Budum", " Garup (Bargam language speakers)", " Megiar (Bargam language speakers)", " Biranis (Bargam language speakers)", " Liksal (Bargam language speakers)", " Barag / Aronis (Bargam language speakers)", " Bunu No.1 (Bargam language speakers)", " Kudas (Bargam language speakers)", " Wasab (Bargam language speakers)", " Burbura", " Bagildik", " Deda", " Bomasse", " Bandimfok", " Asiwo", " Abab", " Dimert", " Bilakura", " Embor", " Perene", " Katekot", " Hinihon",],
            },
            "USINO-BUNDI": {
                "Bundi Rural": ["Bundi-kara", " Snopass", " Bononi", " Imuri", " Gobug-Agu", " Yandara", " Kindaukevi", " Karamuke", " Marum", " Mokinangi", " Guyebi", " Emegari", " Kobum", " Mondinongra", " Pupuneri", " Biom", " Promisi", " Brahman", " Tauya", " Safi", " Pendiva", " Krumbukari",],
                "Usino Rural": ["Bumbu (Mari language speakers)", " Sankain (Mari language speakers)", " Dumpu (Watiwa language speakers)", " Kesawai", " Aliveti", " Koropa", " Sausi", " Korona", " Yakumbu", " Walium", " Kuragina", " Waput (Danaru language speakers)", " Puksak", " Naru", " Somau", " Mopo", " Animinik", " Negeri", " Begesin", " Koinegur", " Baisop", " Kunduk", " Eunime", " Komas", " Igoi", " Usino Station", " Boko", " Garaligut (Aisi language speakers)", " Musak (Aisi language speakers)", " Kukapang", " Ramu Sugar Urban",],
                "Gama Rural": ["Aingdai /Forogo", " Ambisiba", " Kenaint", " Kinibong", " Gai", " Bank", " Useruk", " Kwaringiri", " Garisakan / Umerum", " Gunts", " Komaraga", " Kombaku", " Nimbla",],
            },
        },
        "Morobe": {
            "BULOLO": {
                "Mumeng Rural": ["Timini", " Hengambu", " Gurakor", " Patep", " Parakris", " Yanta", " Zenag", " Kumalu", " Sambio", " Latukatop", " Baiyune", " Galawo", " Dambi", " Mumeng Station", " Witipos", " Kapin", " Tayek", " Bupu", " Piu", " Dangal",],
                "Waria Rural": ["Saiwarika", " Arabuka", " Gusuwe", " Pagau", " Kasuma", " Gataipa", " Sim", " Wisi", " Kasangare", " Timanigosa", " Garaina Station", " Garaina", " Tiaura", " Peira", " Garasa", " Ohe", " Biawaria",],
                "Watut Rural": ["Menhi", " Hawata", " Pararoa", " Andarora", " Society (including Manki village)", " Sapanda", " Gawapu", " Nauti Aid Post", " Ekopa", " Baini", " Kebi", " Malangta",],
                "Wau Rural": ["Maus Bokis", " Mrs Booth", " Maus Kuranga", " 4 Mile/Nami", " Wara Muli (DAL Stn.)", " Nemnem Station", " Eddie Creek", " Bitoi", " Wandumi", " Sandy Creek", " Kwembu", " Kaisenik", " Biawen", " Were Were", " Winima", " Elauru", " Wisini", " Kembaka", " Tori", " Tekadu",],
                "Buang Rural": ["Bugiau", " Wagau", " Mambumb", " Muniau", " Aiyayok", " Rari/Bugweb", " Dawong", " Lomalom", " Bulandem", " Chimburuk", " Mapos 1", " Mapos 2", " Sagaiyo", " Pepekane", " Lagis/Tokane", " Mangga", " Bayamatu", " Kwasang", " Zeri", " Zamondang/Bayauaga",],
                "Wau-Bulolo Urban LLG": ["Bulolo Urban", " Wau Urban",],
            },
            "FINSCHAFEN": {
                "Burum Kwat Rural": ["Kotken", " Zengaring", " Numbut", " Ubanong", " Koire", " Songolok", " Nomaneneng", " Sagiro", " Ogeranang", " Serembeng", " Origenang", " Manimbu", " Wamoki", " Ebabang", " Hamoronong", " Sangararang", " Tumnong", " Mindik", " Satneng", " Wagang", " Tobou", " Lengbatti", " Awengu", " Sasiu",],
                "Kotte Rural": ["Keregia", " Merikeo", " Bolingboneng", " Yunzaing", " Wareo", " Fior", " Maruruo", " Jivewaneng", " Siki", " Heldback",],
                "Yabim Mape Rural": ["Kamlawa", " Simbang", " Bugaim", " Nasingalatu", " Sokaneng", " Kwalansam", " Kasanga", " Busiga", " Wanam/Tami Island", " Bukawasip", " Tigidu", " Samantiki", " Mawaneng", " Embewaneng", " Mangao", " Kangaruo", " Haponhongdong", " Buang", " Gurungko", " Yombong", " Kolem",],
                "Hube Rural": ["Pindiu Station", " Tireng", " Unsesu", " Gemaheng", " Sembang (Sofifi)", " Sanangac", " Zaningu", " Homoneng", " Morago", " Besibong", " Pindiu Station", " Zenguru", " Qwakugu", " Genna", " Gaeng", " Sofifi",],
                "Finschafen Urban": ["Finschhafen Urban",],
            },
            "HUON GULF": {
                "Morobe Rural": ["Kui (Kala language speakers)", " Paiawa (Numbami language speakers)", " Miama", " Zinamba", " Zigori", " Amoa", " Bosadi", " Mou", " Ana", " Eware", " Kobo", " Eiya", " Wuwu", " Dona", " Ainse", " Zare", " Siu", " Popoe", " Bau", " Morobe Station", " Pema",],
                "Salamaua Rural": ["Hote", " Yemly", " Bobodum", " Selebob", " Kamiatam (Iwal language speakers)", " Mubo (Iwal language speakers)", " Lababia (Kala language speakers)", " Salus (Iwal language speakers)", " Buansing (Iwal language speakers)", " Laukanu (Kala language and Iwal language speakers)", " Laugui (Kala language and Iwal language speakers)", " Keila (Kala language speakers)", " Asini", " Buakap", " Lutu Busama", " Awasa Busama", " Wabubu",],
                "Wampar Rural": ["Mare (Wampar language speakers)", " Wampit (Wampar language speakers)", " Gabensis (Wampar language speakers)", " Omisi", " Markham Bridge", " Labutale (Labu language speakers)", " Labumiti (Labu language speakers)", " Labubutu (Labu language speakers)", " 5 Mile", " St Joseph", " Awillunga", " Bubia", " Busanim", " Yalu (Aribwaung language speakers)", " Munum (Wampar language speakers)", " Nasuapum (Wampar language speakers)", " Gapsongkeg (Wampar language speakers) - including historic World War II site of Nadzab", " Naromangki", " Chivasing (Wampar language speakers)", " Tararan (Wampar language speakers)", " Noa", " Bogeba", " Irumu", " Uruf (North Watut language speakers)", " Tsilitsili (Middle Watut language speakers)", " Maralina (Middle Watut language speakers)", " Maralangko (South Watut language speakers)",],
            },
            "KABWUM": {
                "Deyamos Rural": ["Hamelengan", " Komutu", " Yalument Station", " Etaino", " Birimon", " Gomandat", " Lewemon", " Takop", " Timovon", " Mumunggam", " Sambangan", " Ongakei", " Yakop", " Yandu", " Derim", " Songgin",],
                "Yus Rural": ["Yawan Worin", " Sugan", " Boksawin", " Dinangat (Kutong language speakers)", " Gorgiok", " Bungawat", " Mek Nolum", " Urop Isan", " Wadabong", " Nokopo", " Gua Gangulut", " Kumbul Taps", " Mengan Numbo",],
                "Komba Rural": ["Zangang", " Taknawe", " Malandum", " Mangam", " Nakambuk", " Somboru", " Satwak", " Langa", " Saune/Kopa", " Waran", " Indagen", " Musep", " Geraun", " Konge", " Ununu", " Sikam", " Kambuk", " Sape", " Gumum",],
                "Selepet Rural": ["Nimbako", " Wap", " Sorong/Kusin", " Dengop", " Konimdo", " Selepet", " Indum 2", " Indum 1", " Weke", " Dollo", " Kamandu", " Gilang", " Hupat", " Tipsit", " Dengondo", " Bomu/Gotoro", " Iloko", " Kabwum Station",],
            },
            "LAE": {
                "Ahi Rural": ["Ahi Rural"],
                "Lae Urban": ["Lae Urban"],
            },
            "MARKHAM": {
                "Onga-Waffa Rural LLG": ["Tapakainantu", " Imane", " Kusing", " Siaga", " Tumbuna", " Ngarowain", " Guruf", " Itsingants", " Antir", " Intoap", " Wampul/Miril/Umisuan", " Singas / Awan Singas", " Onga",],
                "Umi-Atzera Rural LLG": ["Ragiampun", " Waritzian", " Watarais", " Atzunas", " Marawasa", " Wankun", " Raginam", " Rumpa", " Yanuf", " Numbugu", " Ngarutzaniang", " Samaran", " Zumara", " Mayamzariang", " Tofmora", " Arifiran", " Dabu", " Zumim", " Antiragen", " Gandisap", " Sauruan", " Marangits", " Marangints", " Mangiang", " Binimamp", " Nasawasiang", " Sangan", " Wafibampun", " Zumangurun", " Mutzing Station",],
                "Wantoat-Leron Rural LLG": ["Matak", " Mataya", " Guningwan", " Arawik", " Umbaku", " Yaparwguan", " Gwambongwak", " Sengapan", " Kubung", " Uyam", " Bumbum", " Daimsot", " Ewok", " Ginonga", " Kamang", " Gumia", " Daku", " Sukurum (Sukurum language speakers)", " Som (Sarasira language speakers)", " Ngariawang",],
            },
            "MENYAMYA": {
                "Kome Rural": ["Engati", " Tsewi (Kamasa language and Kawacha language speakers)", " Umba", " Engiapa", " Jipa", " Menya", " Yakwe", " Longwi", " Ilbale", " Kwaplalim", " Helolpa", " Kenoli", " Wanagapali", " Hatingli", " Ikumdi", " Menyamya Station",],
                "Wapi Rural": ["Watama", " Hanjua", " Wauwoka", " Womei", " Tamoi", " Yakepa", " Akwanja", " Topa", " Mabukapa", " Aiyogi", " Sikwong 1", " Sikwong 2", " Kapini", " Himerka", " Gebgya",],
                "Kapao Rural": ["Otete", " Langamar", " Angapena/Angewanga", " Hiakwata", " Komakwata", " Kamiakaka", " Okaneiwa", " Yamaiya", " Pasea", " Angeweto", " Aweaka", " Mekini", " Hiyewini", " Pawamanga", " Ainandoa", " Mungo", " Kalasu",],
                "Nanima Kariba Rural": ["Oiwa", " Haukini", " Wangini", " Bainu", " Poiyu", " Aseki Station", " Damnga", " Pakea", " Yangaiyu", " Wapa", " Tawa Station", " Yeva", " Kokea", " Wingia",],
            },
            "NAWAE": {
                "Labuta Rural": ["Tamigidu", " Boac", " Buingim", " Ee'c", " Wideru", " Bukawa (Bukawa language speakers)", " Mundala", " Yambo", " Buhalu", " Waganluhu", " Apo", " Musom/Tale (Musom language speakers)", " Situm", " Momolili",],
                "Nabak Rural": ["Satukimo", " Yaquamu", " Awen", " Baindoang", " Kwambelem", " Kasanombe", " Karangandoang", " Kemen (Duwet language speakers)", " Momsalop", " Gwabadik", " Gawam", " Samanzing", " Hobu", " Sambuen",],
                "Wain-Erap Rural": ["Kokosan", " Saut", " Finungwa", " Lowai", " Rabisap", " Tinibi", " Sintogora (Mungkip language speakers)", " Kisengan One", " Kisengan Two", " Gain", " Sadao", " Kuepunum", " Bandong", " Gusi", " Gamiki (Nafi language speakers)", " Pupuf", " Gumbum", " Gewak",],
            },
            "TEWAI-SIASSI": {
                "Sialum Rural": ["Gitua", " Kumukio", " Sialum (Sialum language speakers)", " Gitukia", " Kukuya", " Kangkeu", " Rua", " Nungen (including the village of Nunzen)", " Kanome", " Ririwo", " Karako", " Zankoa", " Wandokai", " Walingai", " Rebafu", " Zange Fifi", " Zuzumau", " Masa", " Kingarenau", " Siwea",],
                "Siassi Rural": ["Lokep", " Masele", " Aimalu", " Aupwel", " Samanai", " Semo", " Pandamot", " Tagop", " Opai", " Bunsil", " Aronai", " Malai", " Tuam", " Mandok", " Giam", " Gune", " Lablab 1", " Marile", " Mabey", " Movi",],
                "Wasu Rural": ["Yakawa", " Sio 2", " Sio 1", " Kulavi", " Wasu Station", " Kiari", " Weleki", " Towat", " Welowelo", " Singorokai", " Roinji (Ronji language speakers)", " Hungo", " Satop", " Wawet", " Domut", " Belombibi", " Karangan", " Niniea",],
            },
        },
        "Sandaun (West Sepik)": {
            "AITAPE-LUMI": {
                "East Aitape Rural": ["Poltulul", " Tales-Iambu", " Tumeleo Island (Tumleo language speakers)", " Ali Island (Kap language speakers)", " Seleo Island (Kap language speakers)", " Poro Settlement", " Lupai", " Wauningi", " Pes", " Prou/Vokau", " Lemieng", " Chinapeli", " Kiriel-Kopom", " Paup", " Yakamul 1 (Kap language speakers)", " Yakamul 2 (Kap language speakers)", " Ulau 1 (Ulau-Suain language speakers)", " Ulau 2 (Ulau-Suain language speakers)", " Suain (Ulau-Suain language speakers)", " Labuain", " Wamsis (Abu’ Arapesh language speakers)", " Balup (Abu’ Arapesh language speakers)", " Matapau (Abu’ Arapesh language speakers)", " Aitape Urban",],
                "East Wapei Rural": ["Kamnom (Awtuw language speakers)", " Bulwo (Pouye language speakers)", " Yiklau (Pouye language and Karawa language speakers)", " Maurom (Pouye language speakers)", " Kulnom", " Kweftim", " Eritei 2", " Taute", " Maui/Talbibi", " Lumi", " Oute", " Tabale (Yau language (Torricelli) speakers)", " Karate", " Sainde", " Mabul",],
                "West Aitape Rural": ["Nimas", " Manyer (Sissano)", " Maindroin (Sissano)", " Paupa (Bauni speakers)", " Moriri", " Arop 1 (Arop speakers)", " Arop 2 (Arop speakers)", " Mainyen (Malol speakers)", " Tanyapin", " Aipokon", " Nengian", " Koiniri", " Walwale", " Rome", " Barera", " Kaiye", " Mafoka", " Mori", " Mumuru", " Sumo (Bouni speakers)", " Ramo (Uni speakers)", " Pou", " Sarai (Sera speakers)", " Rainuk", " Amsuku",],
                "West Wapei Rural": ["Kabore (One language speakers)", " Molmo (One language speakers)", " Pelama", " Kakoi (One language speakers)", " Yebil", " Inebu (One language speakers)", " Mokai", " Karaitem", " Minate", " Sibote", " Miwaute", " Wabute", " Kupuom", " Wigote", " Kumnate",],
            },
            "NUKU": {
                "Mawase Rural": ["Seleput (Siliput language speakers)", " Nuku", " Mantsuku", " Yiminum", " Ifkindu", " Wilwil", " Kaflei", " Kaflei 3", " Arkosame 1", " Arkosame 2", " Hambasama", " Angara", " Abigu", " Usitamu", " Hambanori", " Engiep", " Wombiu", " Wulbowe", " Tukinaro", " Yilwombuk", " Arkosome 3", " Yirwondi (Seim language speakers)", " Sepitala", " Suau",],
                "Palmai Rural": ["Kuvalvu", " Monandin", " Nangen", " Yadagaro", " Sundun (Bragat language speakers)", " Kolembi", " Sumambum", " Asier", " Binare", " Boini", " Wara", " Muku", " Yeresi", " Sabig", " Mai", " Yambil", " Sengi", " Yolpa", " Munumbal",],
                "Yangkok Rural": ["Ausin/Yumoun", " Mupun/Sikel", " Weikint/Nunsi", " Yuwil/Yemlu", " Laingim/Soloku", " Wulukum", " Piom/Lalwi", " Bimon/Maibel", " Yili/Tomoum", " Pinkil/Bairap", " Warin/Witaili", " Puang/Witikin", " Weis/Witwan", " Tomontonik/Yemnu", " Anguganak", " Rawot", " Maimbel", " Brugap/Bogasip", " Yangkok", " Mushu/Wublakil", " Ningil 1 (Ningil language speakers)", " Ningil 2 (Ningil language speakers)",],
                "Maimai Wanwan Rural": ["Yimin", " Nau'alu", " Gamu/Ulap", " Yimut", " Wundu", " Yimauwi", " Yauwo", " Maimai", " Aimukuli", " Mukili (Beli language speakers)", " Yulem", " Yemeraba", " Wemil", " Leiko (Laeko language speakers)", " Waniwomoko",],
            },
            "TELEFOMIN": {
                "Namea Rural": ["Abrau", " Alendami", " Akwom", " Augom", " Alai", " Ameni (Namia language speakers)[3][4]", " Iwani (Namia language speakers)", " Magleri", " Mantopai", " Warukori", " Norambalip", " Yakaltim (Auwon language speakers)", " Yegarapi", " Yilui", " Edwaki",],
                "Oksapmin Rural": ["Ranimap", " Betianap", " Divanap", " Kuiva", " Kusanap", " Mitaganap", " Tekap", " Teranap", " Tomianap", " Seremty", " Oksapmin Subdistrict", " Bimin", " Daburap", " Duban", " Kweptanap", " Sungtem", " Umanap", " Akiapmin", " Lembana", " Monduban", " Tomware",],
                "Telefomin Rural": ["Amaromin", " Fuiaimin", " Bovripmin", " Sogamin", " Temsapmin", " Abungkamin", " Afogavip", " Agamtauip", " Anavip-Kalikman", " Atemtkiakmin", " Bofulmin/Tifalmin", " Bogalmin", " Drolengam", " Famukin", " Inantigin", " Kialikman/Framen", " Urapmin", " Kobrenmin", " Kobrenmin/Framin", " Komdavip", " Ofektaman", " Okbilavip", " Siliambil", " Fumenavip", " Wabia", " Freda Base",],
                "Yapsie Rural": ["Imnai 1", " Imnai 2", " Bitapena", " Tumolbil", " Ivikmin", " Kemeimin", " Urapmin", " Sokonga", " Bakading", " Fungal", " Bilka", " Bokembil", " Wauru", " Defakbil", " Mututeimin", " Umfokmin", " Atensikin", " Mongapbip", " Fiamok", " Busulmin",],
            },
            "VANIMO-GREEN RIVER": {
                "Amanab Rural": ["Bibriari (Angor language speakers)", " Porumun (Angor language speakers)[3]", " Itomi", " Mamamura", " Wahai", " Kamberatoro (Dera language speakers)", " Kofiniau", " Iafar", " Naineri", " Wamuru", " Aheri", " Amanab Station (Amanab language speakers)", " Iveig", " Akraminag", " Masineri-Nai No. 2", " Utai", " Guriaso (Guriaso language speakers)[4][5]", " Komtari (Kwomtari language speakers)",],
                "Bewani-Wutung Onei Rural LLG": ["Wutung (Wutung language speakers)", " Musu (Wutung language speakers: Musu dialect)", " Yaukono (Wutung language speakers: Nyao dialect)", " Yako", " Waromo (Dumo speakers)", " Lido", " Ningra (Ningera language speakers)", " Rawo", " Poko", " Nowake", " Laitre (Rawo language speakers)", " Puari", " Onei (Womo language speakers)", " Osol", " Krisa (I'saka language speakers)", " Ossima (Kilmeri language speakers)", " Kilipau", " Ilup", " Amoi", " Somboi", " Ituly", " Skotiaho", " Ainbai (Ainbai language speakers)", " Sumumini", " Imbio 2", " Imbrinis", " Imbrinis",],
                "Vanimo Urban": ["Vanimo Town",],
                "Walsa Rural": ["Doandai (Auwe-Daonda language speakers)", " Smock (Auwe-Daonda language speakers)[3][4]", " Namola", " Daunchendi", " Epmi", " Doponendi (Waris language speakers)", " Wainda", " Holosa", " Daundi", " Tamina 1", " Fas 1 (Fas language speakers)", " Waina (Sowanda language speakers: Waina dialect/village)", " Punda (Sowanda language speakers: Punda and Umeda dialects/villages)",],
                "Green River Rural": ["Abaru (Karkar language speakers)",
                    "Dieru",
                    "Hogru",
                    "Rawei",
                    "Nagatiman",
                    "Dila",
                    "Marakwini",
                    "Wagu",
                    "Beimap",
                    "Seiawi (Siawi language speakers)",
                    "Amto (Amto language speakers)",
                    "Bisiabru",
                    "Idam",
                    "Hufi",
                    "Biake  (Pyu language speakers)",
                    "Kaiseiru",
                    "Sokmaiyon",
                    "Kobraru",
                    "Yabru",
                    "Buna",
                    "Mahanei",
                    "Mukuasi",
                    "Bifro",
                    "Baio",
                    "Yibru",
                    "Miniabru",
                    "Auiya  (Karkar language speakers)",
                    "Kambriap (Karkar language speakers)",
                    "Fonginum",
                    "Iuri",
                    "Tingirapu",
                    "Amini (Biaka language speakers)",
                    "Samunai",
                    "Miarfai",
                    "Biaka (Biaka language speakers)",
                    "Biaka (Biaka language speakers)",
                ],
            },
        },
    },
    "SOUTHERN": {
        "Central": {
            "ABAU": {
                "Amazon Bay Rural": ["Doriodua", " Banaoro", " Losoa", " Bogea", " Launoga", " Ade/Ebu", " Barauoro", " Goiseoro", " Danava", " Daena", " Warumen", " Abasi", " Malaoro", " Kenene", " Nonou", " Aloke",],
                "Aroma Rural": ["Paramana", " Pelagai", " Maopa", " Gaivakalana", " Egala Auna", " Waro/Iruone", " Kelekapana", " Wairavanua", " Vuru", " Kelerakwa", " Bukuku", " Upulima", " Waiori", " Wanigela", " Gavuone", " Kapari", " Lalaura", " Kupiano Urban",],
                "Cloudy Bay Rural": ["Boru", " Doma", " Robinson River", " Si'ini", " Duramu", " Ganai", " Amau", " Ianu", " Domara", " Baramata", " Tutubu", " Merani", " Manabo", " Dom", " Cocoalands", " Moreguina Urban",],
            },
            "GOILALA": {
                "Guari Rural": ["Zarima", "Kamulai", "Rupila", " Zhake",],
                "Tapini Rural": ["Tapini Urban", "Ivani", " Central Ivane", "20503 Sopu", "20504 Kerau", "20505 Kataipa", "20506 Jowa", "20507 Loloipa", "20508 Pilitu 1", "20509 Pilitu 2",],
                "Woitape Rural": ["Chirima",
                    "Chirima Valley",
                    "Dilava",
                    "Fane",
                    "Auga",
                    "Woitape",
                    "Ononge",
                    "Aduai",
                    "Woitape Station",
                ],
            },
            "KAIRUKU": {
                "Hiri Rural": ["Porebada", " Boera", " Papa", " Roku", " Lealea", " Kido", " Manumanu", " Barakau", " Tubusereia", " Mt. Diamond", " Gaire", " Dagoda", " Akuku", " Laloki", " Vanapa", " Kerea", " Brown River", " Boteka",],
                "Koiari Rural": ["Osabewai", "Mesime", " Vaiagai", " Furimuti", "epo (Mageri)", " Vesilogo", " Bereadabu", " Kailaki", " Doe", " Ogotana", " Kahitana", " Berebei", " Varutanumu", " Suria/Kotoi", " Boridi", " Kagi", " Efogi", " Manari", " Edevu", " Sogeri Urban", " Sogeri Urban", " Goldie Urban 01",],
                "Mekeo Kuni Rural": ["Aipeana", " Veifa'a", " Rarai", " Ianwaui", " Eboa", " Inawabui", " Inawaia", " Inaoae", " Bebeo", " Jeku", " Inaui", " Ameiaka", " Babanongo", " Maipa", " Apanaipi", " Upper Kuni", " Lower Kuni", " Kubuina", " Bakoiudu",],
                "Kairuku Rural": ["Kivori",
                    "Waima Abiara",
                    "Waima/Kore",
                    "Delena",
                    "Nabuapaka",
                    "Chiria",
                    "Abiara",
                    "Biotou",
                    "Rapa",
                    "Mou",
                    "Babiko",
                    "Nara",
                    "Hisiu",
                    "Gabadi/Pinu",
                    "Malati",
                    "Veimauri",
                    "Bereina Urban",
                ],
            },
            "RIGO": {
                "Rigo Central Rural": ["Manugoro", " Girabu", " Gobuia", " Gomore", " Babaga (Saroa)", " Kemaea", " Kwalimurubu", " Gidobada", " Saroa", " Kodogere", " Geresi", " Wasira", " Kwikila Town", " Imuagoro", " Saroakeina", " Sivitatana", " Boregaina", " Daroakomana", " Bigairuka", " Bore", " Goulupu", " Niuiruka", " Rigo Koiari Iove", " Karekodobu", " Kware", " Gaunomu", " Nafenanomu", " Dirinimu", " Kwikila Urban",],
                "Rigo Coastal Rural": ["Gabagaba", " Ginigolo", " Gunugau", " Tagana", " Gabone", " Tauruba", " Bonanamo", " Kemabolo", " Galomarupu", " Walai", " Babagarubu", " Riwalirupu", " Gemo", " Kaparoko", " Irupara", " Hula", " Babaka", " Kamali", " Kalo", " Makerupu", " Alukuni", " Karawa", " Keapara",],
                "Rigo Inland Rural": ["Upper Maria", " Central Maria", " East Maria", " West Maria", " Ormand East", " Ormand Central", " Ormand West", " Upper Mt. Brown", " Central Mt. Brown", " Lower Mt. Brown", " Upper Boku/Doromu", " Central Boku/Doromu", " Lower Boku/Doromu", " Upper Mt. Obree", " Central Mt. Obree", " Lower Mt. Obree",],

            },
        },
        "Gulf": {
            "KEREMA": {
                "Central Kerema Rural": ["Uaripi (Tairuma language speakers)", " Mei'i", " Lapari", " Mirakere", " Didimaua", " Uriri (Kaki Ae language speakers)", " Silo", " Uamai No. 1", " Uamai No. 2", " Karama", " Pukari", " Koaru", " Meporo", " Mamavu",],
                "East Kerema Rural": ["Lelefiru", " Kukipi", " Uritai", " Popo", " Lese", " Miaru", " Iokea", " Sepoe",],
                "Kaintiba Rural": ["Bema", " Mine", " Wimka", " Wempango", " Kaingo", " Hambia", " Yemepango", " Hawabango", " Karangea", " Kwoi'amunga", " Kengo", " Hapataewa", " Kaintiba Station", " Ikose", " Yakitangwa",],
                "Kerema Urban": ["Kerema Town",],
                "Kotidanga Rural": ["Kanabea", " Ipaiyu", " Manimango", " Wemawa", " Komako", " Kwaiyu", " Bu'u", " Pio (Tainae language], speakers)", " Ania (Tainae language], speakers)", " Aminauwa", " M'bauya", " Ivandu", " Hawakabia", " Kamina", " Tiawa", " Paina", " Meiwari", " Kutumbaiwa", " Kotidanga", " Ipaea",],
                "Lakekamu-Tauri Rural": ["Ipihia/Titikaini", " Wanto", " Kakiva", " Putei", " Kakoro", " Okaivai", " Heavala", " Heatoare", " Malalaua Urban",],
            },
            "KIKORI": {
                "Baimuru Rural": ["Amipoke (Ipiko language speakers)", " Karurua Station", " Bekoro", " Mariki", " Varia", " Korovake", " Ara'ava", " Kaiarimai", " Kapuna", " Kinibo", " Ikinu", " Akoma", " Mapaio", " Aikavaravi", " Maipenairu", " Kapai", " Apiope", " Aumu", " Poroi", " Wabo", " Uraru", " Haia", " Baimuru Station",],
                "East Kikori Rural": ["Negebare", " Tobare", " Sera", " Omo", " Kabarau", " Irimuku", " Morere", " Ero", " Veraibari", " Kivaumai", " Morovamu", " Wowoubo", " Waitari", " Nahoromere", " Era Maipua",],
                "Ihu Rural": ["Avavu", " Harevavo", " Kaivukavu", " Arehava", " Kavava", " Harilarewa", " Lariau", " Pakovavu", " Haruape", " Lovehoho", " Ovahuhu", " Vailala", " Karokaro", " Herehere", " Koialahu", " Lepokela", " Akapiru", " Hepa", " Heawa", " Mailava", " Belepa", " Ihu Station",],
                "West Kikori Rural": ["Haivaro", " Moka (Minanibai language speakers)", " Komaio", " Masusu", " Gibu", " Ekeirau", " Kibeni (Minanibai language speakers)", " Omati-Gihiteri", " Kaiam", " Baina", " Kemei", " Dopima", " Babaguina", " Apeawa", " Doibo", " Kopi", " Kikori Urban",],
            },
        },
        "Milne Bay": {
            "ALOTAU": {
                "Makamaka Rural": ["Bai'awa", " Midino", " Iarame", " Pem", " Magabara", " Tapio", " Mukawa", " Bogaboga", " Ginada", " Irikaba", " Wabubu", " Dabora", " Banapa", " Menapi", " Pora", " Abuaro", " Giwa", " Koiyabagira", " Kwagila", " Biniguni", " Wapon", " Borovia", " Pumani", " Bemberi", " Gurukwaia", " Mapouna",],
                "Daga Rural": ["Gaunani", " Birat", " Bonenau", " Param", " Kakaia", " Payawa", " Ilakae - Modeni", " Uni", " Bibitan", " Danawan", " Biman", " Gwagut", " Gwadede", " Eviaua", " Gwaira", " Kanaturu", " Gauwa", " Gwiroro",],
                "Weraura Rural": ["Divari", " Kwabunaki", " Rumaruma", " Damayadona", " Wedau", " Manubada", " Vidia", " Radava", " Gadoa", " Wadobuna", " Nakara", " Uga", " Augwana", " Sirisiri", " Taramugu", " Ikara", " Taubadi", " Bidiesi", " Awawa", " Dombosaina", " Warawadidi", " Bowadi", " Danobu", " Karagautu", " Wanama", " Boiaboia", " Gadovisu", " Didia", " Mainawa", " Pova",],
                "Maramatana Rural": ["Lavora", " Topura", " Iapoa No. 1", " Wamawamana", " Taupota", " Garuahi", " Awaiama", " Keia", " Iapoa No. 2", " Porotana", " Huhuna", " Guga", " Wagohuhu", " Biwa", " Ibulai", " Ronana", " East Cape", " Iabam/Pahilele", " Nuakata",],
                "Huhu Rural": ["Mutu'uwa", " Divinai", " Daio", " Rabe", " Ianeianene", " Siasiada", " Gibara", " Lamhaga", " Lelehudi", " Watunou", " Nigila", " Ahioma", " Waema", " Gabugabuna", " Maiwara", " Naura", " Gelamalaia", " Gamadoudou", " Wagawaga", " Gwavili", " Upper Dawadawa", " Bubuleta", " Walalaia", " Bou", " Ipouli", " Kilakilana", " Borowai", " Laviam", " Lower Dawadawa", " Hagita Estate",],
                "Suau Rural": ["Koukou", " Iloilo", " Bonarua", " Modewa", " Baibaisiga", " Suau Island", " Sibalai", " Ipulai", " Savalala", " Navabu", " Isuae", " Savaia", " Oyamamania", " Isudiudiu", " Saga'aho", " Isuisu", " Isudau", " Sea'sea Island", " Sea'sea North", " Silosilo", " Kaukau", " Bonabona Island", " Dahuni", " Leileiafa", " Suieabina", " Gadaisu", " Wadauda", " Boilave", " Takwatakwae",],
                "Alotau Urban": ["Alotau Town",],
            },
            "ESAALA": {
                "West Ferguson Rural": ["Fayayana", " Ailuluai", " Ukeokeo", " Toagesi", " Igwageta", " Kukuya", " Ibwananiu", " Mapamoiwa", " Fagululu", " Iamalele South", " Iamalele North", " Gewata", " Saibutu", " Niubuo", " Ebadidi", " Tutubea", " Bwayobwayo", " Masimasi", " Gwabegwabe", " Atugamwana", " Agealuma", " Didiau", " Kalokalo", " Fatavi", " Wapolu",],
                "Dobu Rural": ["Maiabari", " Bwakera", " Koruwea", " Io'o", " Taulu", " Sisiana", " Miadeba", " Darubia", " Kenaia", " Buduwagula", " Nade", " Sill'Ilugu", " Wesoiliwe", " Galibwa", " Neboluwa", " Salamo", " Gomwa", " Begasi", " Du'una", " Daguyala", " Deidei", " Bwaiowa", " Sawa'edi", " Waluma East", " Waluma West", " Sebutuya", " Momoawa", " Basima", " Urua", " Gameta", " Duduna", " Wadalei", " Bosalewa", " Gumawana", " Sanaroa",],
                "Duau Rural": ["Kalologea", " Sawatupwa", " Mwatebu", " Sawataatae", " Lomitawa", " Sipupu", " Wayoko", " Maudana", " Kwanauia", " Loboda", " Siausi", " Dawada", " Sigasiga", " Sapisapia", " Bihawa", " Somwadina", " Mwalakwasia", " Kasikasi", " Kumwalau", " Kalotau", " Barabara", " Bunama", " Gumali", " Isumayaumayau", " Pwanapwana", " Sibonai", " Bwasiyaiyai", " Kurada",],
            },
            "KIRIWINA/GOODENOUGH": {
                "Kiriwina Rural": ["Kaibola", " Mwatawa", " Tubowada", " Dayagila", " Liluta", " Kwebwaga", " Omarakana", " Kabwaku", " Okaikoda", " Yalumgwa", " Kuruvitu", " Yalaka", " Wabutuma", " Bwetalu", " Gumilababa", " Kapwapu", " Kavataria", " Mulosaida", " Oyuveyova", " Tukwaukwa", " Okaiboma", " Ilalima", " Obulaku", " Sinaketa", " Loya", " Vakuta", " Kwumwagea", " Lalela", " Okabulula", " Kaduwaga", " Koma", " Kuyawa", " Simsimla",],
                "Goodenough Island Rural": ["Waibula", " Ufaufa", " Watuluma Upper", " Watuluma Lower", " Idakamenai", " Ulutuya", " Wakonai", " Vivigani", " Eweli", " Kalauna", " Belebele", " Mataita West", " Mataita East", " Faiava", " Ufu'ufu", " Bwadoga East", " Bwadoga West", " Wagifa", " Abolu", " Kilia", " Lauwela", " Awale", " Utalo", " Diodio", " Yauyaula", " Awaya", " Ibawana", " Kalimtabutabu",],
            },
            "SAMARAI-MURUA": {
                "Bwanabwana Rural": ["Hamama", " Loani", " Logea", " Kwato", " Tegorauan", " Gotai", " Dawson", " Samarai East", " Kwaraiwa", " Sawasawaga", " Anagusa", " Samarai North", " Tubetube", " Yokowa", " Gigia", " Habani", " Simagahi", " Ware Island", " Bedauna", " Sideia", " Kuiaro", " Sekuku", " Sidudu",],
                "Louisiade Rural": ["Mwabua", " Narian", " Bwagaoia", " Hinaota", " Kaubwaga", " Boiou", " Siagara East", " Siagara West", " Gulewa", " East Liak", " West Liak", " Bagilina", " Ewena", " Ebora", " Bwagabwaga", " Awaibi", " Alhoga", " Eaus North", " Eaus South", " Gaibobo", " Kimuta", " West Panaeati", " East Panaeati", " Panapompom", " Brooker Island", " Motorina East", " Motorina West", " Bagaman", " Panaumala", " Baimatana", " Loba", " Bwana",],
                "Murua Rural": ["Kulumadau", " Guasopa", " Wabununa", " Kavatana", " Kaurai", " Iwa", " Unumatana", " Budibudi", " Yanaba", " Gawa Island", " Kauwai", " Madau", " Dikoias", " Kwaiwata", " Muneiveyova", " Oyavata", " Alcester",],
                "Yaleyamba Rural": ["N/A"],
            },
        },
        "Oro (Northern)": {
            "IJIVITARI": {
                "Oro Bay Rural": ["Sariri", " Gunimba", " Jegerakambo", " Emo", " Banderi", " Waiwa", " Beama", " Baberada", " Dombada", " Hanakiro", " Kararata", " Dobuduru", " Barisari", " Siremi", " Buna", " Killerton", " Otobefari", " Konje", " Kausada", " Jinanga", " Bakumbari", " Batari", " Oure", " Aure", " Dewatutu", " Bindari",],
                "Tufi Rural": ["Kewansapsap", " Marua", " Uiaku", " Ganjiga", " Rainu", " Koreaf", " Ajoa", " Itoto", " Giriwa", " Managa", " Jebo", " Baga", " Kwave", " Sefoa", " Sinei", " Berebona 1 & 2", " Ako", " Guruguru", " Gobe", " Tufi Govt. Station",],
                "Afore Rural": ["Yoivi", " Niniuri", " Kawowoki", " Kaura", " Siurani", " Kowena", " Dea", " Siribu", " Natanga", " Gora", " Tahama", " Umbuara", " Kokoro", " Ufia (Barai language speakers)", " Toma", " Aiari", " Yaure", " Gorabuna",],
                "Popondetta Urban": ["Gewoto", " Sewa", " Isuga", " Dobuduru", " Sorovi", " East Ambogo", " Popondetta Urban",],
                "Safia Rural": ["Namudi (Nawaru language speakers)", " Sinua", " Moro", " Jari", " Tuturawaru/Bibira No.2", " Safia", " Obea", " Foru", " Karisoa", " Kinjaki", " Embesa", " Koira", " Domara",],
            },
            "SOHE": {
                "Kokoda Rural": ["Asimba", " Kovelo", " Saga", " Iora Lss Blocks", " Kebara", " Abuari", " Alola", " Waju", " Hangiri", " Ambene", " Ilimo", " Hamara", " Ajeka", " Evasusu", " Asisi", " Sairope", " Putembo", " Asafa", " Wora", " Emo", " Awoma", " Kovio", " Kokoda Urban", " Mamba Urban",],
                "Higaturu Rural": ["New Warisota", " Hohorita", " Igora Oil Palm Blks", " Koipa", " Kiorota", " Barevoturu", " Kendata", " Duve", " Kongohambou", " Binduta", " Handarituru", " Awala", " Sui", " Boru", " Mumuni", " Koropata", " Sirembi", " Hungiri", " Sakita", " Papoga", " Ongoho", " Ehu", " Ahora & Beuru", " West Ambogo (Sangara)", " Sangara 1", " Sangara 2", " Isivini", " Horau",],
                "Tamata Rural": ["Huratan", " Oitatande", " Kikinonda", " Korisata", " Utukiari", " Kurereda", " Jino", " Sia", " Manau", " Deboin", " Kataure", " Tubi", " Aindi", " Nindewari", " Ewore", " Bovera", " Tave",],
                "Kira Rural": ["Pepeware", " Gobe", " Upupuro", " Ovasupu", " Oibo",],
            },
        },
        "Western (Fly)": {
            "MIDDLE FLY": {
                "Balimo Urban": ["Balimo Urban",],
                "Bamu Rural": ["Samakopa (Kamula language speakers)", " Kawalasi", " Kamusi", " Parieme", " Bibisa (Foia Foia language speakers)", " Gagori", " Iowa", " Garu", " Miruwo", " Wakau/Sogere", " Asaramio", " Bina", " Sisiam", " Torobina", " Bamio", " Pirupiru", " Ukusi", " Nemeti", " Ibuo",],
                "Gogodala Rural": ["Ali", " Makapa (Turumsa language and Dibiyaso language speakers)", " Isago", " Pikiwa (Dibiyaso language speakers)", " Wasapea (Kamula language speakers)", " Pisi", " Semabo", " Awaba", " Dadi", " Aketa", " Kawito Station", " Kotale", " Kewa", " Tai", " Dogona", " Adiba", " Yau", " Ike", " Kini", " Waligi", " Kimama", " Bamutsa (Dibiyaso language speakers)", " Uladu", " Ugu", " Kenewa", " Waya", " Kubu", " Duaba", " Konedobu", " Pagona", " Dede", " Sialoa", " Kawiyapo", " Uric", " Aduru (Makayam language speakers)", " Baramula (Baramu language speakers)", " Tapila (Abom language and Baramu language speakers)", " Lewada (Abom language and Makayam language speakers)", " Dewara (Abom language and Were language speakers)",],
                "Lake Murray Rural": ["Upovia", " Buseki", " Boimbulavu", " Nago", " Maka", " Magipopo", " Usukof No. 1", " Usokof No. 2", " Kapikam", " Dimu", " Pangoa", " Tagum", " Miwa No. 1", " Miwa No. 2", " Kusikina", " Kuem", " Mipan", " Manda", " Bosset No. 1", " Bosset No. 2", " Wangawanga No. 1", " Wangawanga No. 2", " Komovai", " Kaviananga No. 1", " Kaviananga No. 2", " Boikmava", " Levame", " Lake Murray Station",],
                "Nomad Rural": ["Igimi", " Mougulu", " Kofabi", " Adumari", " Ugubi", " Sefalobi", " Igibia", " Sedado", " Ugulubabi", " Sadubi", " Fuma", " Hafemi", " Yulabi", " Suabi", " Beredina", " Pipila", " Wakela", " Egebila", " Honabi", " Udugombi", " Kukudobi", " Sirigubi", " Mabomanibi", " Wasubi", " Bubusmabi", " Aeyedubi", " Tinahai", " Sinabi", " Wanbi", " Kwobi", " Testabi", " Kuda", " Debepari", " Sokabi", " Honinabi", " Nomad Station", " Dodomona", " Filisato/Banisato",],
            },
            "NORTH FLY": {
                "Kiunga Rural": ["Briompinai", " Timindemasok", " Atkamba", " Dome", " Gi", " Gre", " Griengas", " Drindamasuk", " Drimgas", " Gasuke", " Gusiore", " Timingondok", " Drimskai", " Timinsiriap", " Kukujaba", " Membok", " Erekta", " Moian", " Komokpin", " Menemsore", " Miasomnai", " Tiomnai", " Konkonda", " Yulawas", " Diabi", " Dabike", " Ieran", " Iogi", " Ralengre", " Tamifen", " Refugee Settlement",],
                "Kiunga Urban": ["Kiunga Urban",],
                "Ningerum Rural": ["Ambaga", " Kungim", " Tengkim", " Hukim", " Tarakbits", " Ogun/Ambaga", " Kwikim", " Bankim No. 1", " Wulimkanatgo", " Kolebon", " Wogam", " Hoirenkia", " Sisimakam", " Mohomtienai", " Runai", " Hawenai", " Tmoknai", " Sonai", " Pampenai", " Yenkenai", " Matkomrae", " Dande", " Miamrae", " Ningerum Station",],
                "Olsobip Rural": ["Bolangun", " Kongabip", " Laubip", " Imigabip", " Duwinim/Tamtem", " Golgobip", " Bolibip", " Darabik", " Duminak", " Biangabip", " Selbang", " Seltamin", " Fagobip", " Saganabip", " Yasap", " Dahamo",],
                "Star Mountains Rural": ["Atemkit", " Kavorabip", " Bultem", " Finalbin", " Wangbin", " Migalsimbip", " Niosikwi", " Ok Tedi Tau", " Kumkit", " Ankits", " Kawemtigin", " Korokit", " Tabubil Town",],

            },
            "SOUTH FLY": {
                "Daru Urban": ["Daru Town",],
                "Kiwai Rural": ["Sigabaduru", " Mabudawan", " Tureture", " Sui", " Severimabu", " Doumori", " Variobadoro", " Maduduo (Waboda language speakers)", " Tire'ere (Waboda language speakers)", " Wapi (Waboda language speakers)", " Sagasia", " Buzi", " Mawatta", " Parama", " Aberagerema", " Wabada", " Sepe", " Samari", " Kadawa", " Madame", " Maipani", " Kename", " U'uwo", " Katatai",],
                "Morehead Rural": ["Bula (Kánchá language speakers)", " Wereavere (Mblafe language speakers)", " Wemnevere (Kémä language speakers)", " Mibini (Namat language speakers)", " Garaita (Nama language speakers)", " Pongariki (Nambo language (Namna dialect) speakers)", " Dimisisi (Idi language speakers)", " Sibidiri (Idi language speakers)", " Limol (Ende language speakers)", " Keru (Neme language speakers)", " Pukaduka", " Kiriwo", " Aewe", " Wando (Warta Thuntai language speakers)", " Kandarisa (Ránmo language speakers)", " Rouku (Komnzo language speakers)", " Morehead Station", " Bimadeben (Nen speakers)", " Eniyawa", " Kautru", " Kondobol (Taeme language speakers)", " Malam (Ende language speakers)",],
                "Oriomo-Bituri Rural": ["Dorogori", " Wuroi", " Wonie (Wipi language speakers)", " Iamega (Wipi language speakers)", " Wipim (Wipi language speakers)", " Gamaeve (Wipi language speakers)", " Tewara (Bitur language speakers)", " Kapal (Wipi language speakers)", " Upiara (Bitur language speakers)", " Giringarede", " U'ume (Wipi language speakers)", " Masingara (Bine language speakers)", " Kunini (Bine language speakers)", " Iru'upi (Bine language speakers)", " Waidoro (Gizrra language speakers)", " Kulalai", " Wamarong", " Sebe (Bine language speakers)", " Wim", " Sogale (Bine language speakers)", " Kurunti", " Abam (Wipi language speakers)", " Boze (Bine language speakers)", " Bisuaka (Bitur language speakers; also the Giribam dialect of the Makayam language)", " Podare (Wipi language speakers)",],
            },
        },
        "National Capital District": {
            "MORESBY": {
                "Gerehu Urban": ["N/A"],
                "Waigani-University Urban": ["N/A"],
                "Tokarara-Hohola Urban": ["N/A"],
                "Gordons-Saraga Urban": ["N/A"],
                "Boroko-Korobosea Urban": ["N/A"],
                "Kilakila-Kaugere Urban": ["N/A"],
                "Town-Hanuabada Urban": ["N/A"],
                "Laloki-Napanapa Urban": ["N/A"],
                "Bomana Urban": ["N/A"],
            },
        },
    },
};

window.onload = function () {
    var regionSel = document.getElementById("region_select");
    var provinceSelect = document.getElementById("province_select");
    var districtSelect = document.getElementById("district_select");
    var topicSel = document.getElementById("LLG_select");
    var chapterSel = document.getElementById("ward_select");

    for (var v in subjectObject) {
        regionSel.options[regionSel.options.length] = new Option(v, v);
    }

    regionSel.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        provinceSelect.length = 1;
        districtSelect.length = 1;
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var w in subjectObject[this.value]) {
            provinceSelect.options[provinceSelect.options.length] = new Option(w, w);
        }
    };
    provinceSelect.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        districtSelect.length = 1;
        chapterSel.length = 1;
        topicSel.length = 1;
            // console.log(this.value);
            // var provinceName = this.value;
            // $.ajaxSetup({
            //     headers: {
            //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            //     },
            // });
            // $.ajax({
            //     /* the route pointing to the post function */
            //     url: '/getProvinceID',
            //     type: 'POST',
            //     /* send the csrf-token and the input to the controller */
            //     data: {province: provinceName},
            //     dataType: 'JSON',
            //     async: false,
            //     /* remind that 'data' is the response of the AjaxController */
            //     success: function (data) {
            //         console.log(data.province_id);
            //         province_id = data.province_id;
            //         console.log(province_id, 'a');
            //         $("#provinceID").val(province_id);
            //         //display correct values
            //     },
            // });
        for (var x in subjectObject[regionSel.value][this.value]) {
                districtSelect.options[districtSelect.options.length] = new Option(x, x);
                // var province_id = $("#provinceID")[0].value;
                // console.log(x, this.value, province_id, '1');
                // //store district Ajax
                // $.ajaxSetup({
                //     headers: {
                //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                //     },
                // });
                // $.ajax({
                //     /* the route pointing to the post function */
                //     url: '/addDistrict',
                //     type: 'POST',
                //     /* send the csrf-token and the input to the controller */
                //     data: {name: x, province_id: province_id},
                //     dataType: 'JSON',
                //     /* remind that 'data' is the response of the AjaxController */
                //     success: function (data) {
                //         console.log(data.msg);
                //     }
                // });

            }
    }

    districtSelect.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        // console.log(this.value);
        // var districtName = this.value;
        // $.ajaxSetup({
        //     headers: {
        //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        //     },
        // });
        // $.ajax({
        //     /* the route pointing to the post function */
        //     url: '/getDistrictID',
        //     type: 'POST',
        //     /* send the csrf-token and the input to the controller */
        //     data: {district: districtName},
        //     dataType: 'JSON',
        //     async: false,
        //     /* remind that 'data' is the response of the AjaxController */
        //     success: function (data) {
        //         console.log(data.district_id);
        //         district_id = data.district_id;
        //         console.log(district_id, 'a');
        //         $("#districtID").val(district_id);
        //         //display correct values
        //     },
        // });
        //display correct values
        for (var y in subjectObject[regionSel.value][provinceSelect.value][this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
            // var district_id = $("#districtID")[0].value;
            // console.log(y, this.value, district_id, '1');
            // //store district Ajax
            // $.ajaxSetup({
            //     headers: {
            //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            //     },
            // });
            // $.ajax({
            //     /* the route pointing to the post function */
            //     url: '/addLLG',
            //     type: 'POST',
            //     /* send the csrf-token and the input to the controller */
            //     data: {name: y, district_id: district_id},
            //     dataType: 'JSON',
            //     /* remind that 'data' is the response of the AjaxController */
            //     success: function (data) {
            //         console.log(data.msg);
            //     }
            // });
            // console.log(y);
        }
    };
    topicSel.onchange = function () {
        //empty Chapters dropdown
        chapterSel.length = 1;
        // console.log(this.value);
        // var LLGName = this.value;
        // $.ajaxSetup({
        //     headers: {
        //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        //     },
        // });
        // $.ajax({
        //     /* the route pointing to the post function */
        //     url: '/getLLGID',
        //     type: 'POST',
        //     /* send the csrf-token and the input to the controller */
        //     data: {LLG: LLGName},
        //     dataType: 'JSON',
        //     async: false,
        //     /* remind that 'data' is the response of the AjaxController */
        //     success: function (data) {
        //         console.log(data.LLG_id);
        //         LLG_id = data.LLG_id;
        //         console.log(LLG_id, 'a');
        //         $("#LLGID").val(LLG_id);
        //         //display correct values
        //     },
        // });
        //display correct values
        var z = subjectObject[regionSel.value][provinceSelect.value][districtSelect.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(
                z[i],
                z[i]
            );
            // var LLG_id = $("#LLGID")[0].value;
            // console.log(z[i], this.value, LLG_id, '1');
            // //store district Ajax
            // $.ajaxSetup({
            //     headers: {
            //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            //     },
            // });
            // $.ajax({
            //     /* the route pointing to the post function */
            //     url: '/addWard',
            //     type: 'POST',
            //     /* send the csrf-token and the input to the controller */
            //     data: {name: z[i], LLG_id: LLG_id},
            //     dataType: 'JSON',
            //     /* remind that 'data' is the response of the AjaxController */
            //     success: function (data) {
            //         console.log(data.msg);
            //     }
            // });
            // console.log(z[i]);
        }
    };

    //for current address
    var regionSel1 = document.getElementById("region_select1");
    var provinceSelect1 = document.getElementById("province_select1");
    var districtSelect1 = document.getElementById("district_select1");
    var topicSel1 = document.getElementById("LLG_select1");
    var chapterSel1 = document.getElementById("ward_select1");
    for (var v in subjectObject) {
        regionSel1.options[regionSel1.options.length] = new Option(v, v);
    }

    regionSel1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        provinceSelect1.length = 1;
        districtSelect1.length = 1;
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var w in subjectObject[this.value]) {
            provinceSelect1.options[provinceSelect1.options.length] = new Option(w, w);
        }
    };
    provinceSelect1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        districtSelect1.length = 1;
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var x in subjectObject[regionSel1.value][this.value]) {
            districtSelect1.options[districtSelect1.options.length] = new Option(x, x);
        }
    };
    districtSelect1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var y in subjectObject[regionSel1.value][provinceSelect1.value][this.value]) {
            topicSel1.options[topicSel1.options.length] = new Option(y, y);
        }
    };
    topicSel1.onchange = function () {
        //empty Chapters dropdown
        chapterSel1.length = 1;
        //display correct values
        var z = subjectObject[regionSel1.value][provinceSelect1.value][districtSelect1.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel1.options[chapterSel1.options.length] = new Option(
                z[i],
                z[i]
            );
        }
    };
};
