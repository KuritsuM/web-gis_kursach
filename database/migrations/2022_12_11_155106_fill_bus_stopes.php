<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private \App\Services\BusStopService\Transformer\BusStopTransformer $busStopTransformer;
    private \App\Services\BusStopService\BusStopStoreService $busStopStoreService;

    public function __construct()
    {
        $this->busStopTransformer = \Illuminate\Support\Facades\App::make(\App\Services\BusStopService\Transformer\BusStopTransformer::class);
        $this->busStopStoreService = \Illuminate\Support\Facades\App::make(\App\Services\BusStopService\BusStopStoreService::class);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dtoCollection = $this->busStopTransformer->transformCollectionToDto(
                [
                    'name' => 'ул.Коли Пищенко',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594597, 33.548152)
                ],
                [
                    'name' => 'ул.Проспект Победы',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.584187, 33.563780)
                ],
                [
                    'name' => 'ул.Матроса Кошки',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.604518, 33.535244)
                ],
                [
                    'name' => 'ул.Багрия',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.600020, 33.541458)
                ],
                [
                    'name' => 'ул.Горпищенко',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594339, 33.562848)
                ],
                [
                    'name' => 'ул.Горпищенко (41 школа)',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.597461, 33.558640)
                ],
                [
                    'name' => 'ул.Паршина',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.600513, 33.553962)
                ],
                [
                    'name' => 'ул.Красносельского',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.604908, 33.550674)
                ],
                [
                    'name' => 'Кадетский Корпус',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.601457, 33.548595)
                ],
                [
                    'name' => 'пл.Геннериха',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.608033, 33.550802)
                ],
                [
                    'name' => 'ул.Хрулёва',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.610918, 33.551694)
                ],
                [
                    'name' => 'Завод №13',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.610549, 33.559725)
                ],
                [
                    'name' => 'Кирен Балка',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.610524, 33.561061)
                ],
                [
                    'name' => 'Троицкая Балка',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.614262, 33.560407)
                ],
                [
                    'name' => 'Абрикосовая улица',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.606873, 33.563719)
                ],
                [
                    'name' => 'Магазин Калинка',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.607282, 33.567725)
                ],
                [
                    'name' => 'Школа №51',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.605501, 33.571773)
                ],
                [
                    'name' => 'ул.Генерала Жидилова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.603748, 33.575288)
                ],
                [
                    'name' => 'СНТ Гавань',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.585036, 33.591885)
                ],
                [
                    'name' => 'Дергачи',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.578906, 33.588594)
                ],
                [
                    'name' => 'ул.Артёма Бойко',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.577403, 33.587192)
                ],
                [
                    'name' => 'АЗС на Лабороторном шоссе',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.575398, 33.583038)
                ],
                [
                    'name' => 'Дергачи / Автоцентр',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.573506, 33.579693)
                ],
                [
                    'name' => 'Верхняя ул.Горпищенко',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.576051, 33.579743)
                ],
                [
                    'name' => 'ул.Будищева',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.600051, 33.541246)
                ],
                [
                    'name' => 'ул.Героев Севастополя',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.599825, 33.531013)
                ],
                [
                    'name' => 'Автовокзал',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.599825, 33.531013)
                ],
                [
                    'name' => 'ул.Охотская',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.593350, 33.529988)
                ],
                [
                    'name' => 'Ж/Д вокзал',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.595354, 33.528316)
                ],
                [
                    'name' => 'Площадь Суворова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.605671, 33.528422)
                ],
                [
                    'name' => 'Комсомольский сквер',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.608908, 33.526966)
                ],
                [
                    'name' => 'Комсомольский сквер',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.608908, 33.526966)
                ],
                [
                    'name' => 'Дом офицеров',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.613305, 33.525597)
                ],
                [
                    'name' => 'пр.Нахимова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.616559, 33.524047)
                ],
                [
                    'name' => 'пр.Нахимова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.616559, 33.524047)
                ],
                [
                    'name' => 'пл.Лазарева',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.612165, 33.520290)
                ],
                [
                    'name' => 'магазин "Черноморочка"',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.611091, 33.519680)
                ],
                [
                    'name' => 'Центральный рынок',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.610454, 33.518036)
                ],
                [
                    'name' => 'ул.Очаковцев',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.608776, 33.518083)
                ],
                [
                    'name' => 'кинотеатр Победа',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.606797, 33.521699)
                ],
                [
                    'name' => 'ул.Большая морская',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.603241, 33.523202)
                ],
                [
                    'name' => 'пл.Ушакова (гостиница Украина)',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.600523, 33.523765)
                ],
                [
                    'name' => 'Университет на ул.Гоголя',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.596114, 33.519745)
                ],
                [
                    'name' => 'пл.Пирагова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.597255, 33.516739)
                ],
                [
                    'name' => 'пл.Восставших',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.601818, 33.515800)
                ],
                [
                    'name' => 'ул.Адмирала Октябрьского',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.603446, 33.519322)
                ],
                [
                    'name' => 'ул.Пожарова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.604868, 33.508371)
                ],
                [
                    'name' => 'ул.Железнякова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.604868, 33.508371)
                ],
                [
                    'name' => 'ул.Галины Петровой',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.602351, 33.502172)
                ],
                [
                    'name' => 'Херсонес таврический',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.609564, 33.493390)
                ],
                [
                    'name' => 'ул.Древняя',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.607384, 33.494376)
                ],
                [
                    'name' => 'парк имени С.А.Чижа',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.604968, 33.493672)
                ],
                [
                    'name' => 'ул.Дмитрия Ульянова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.601009, 33.494095)
                ],
                [
                    'name' => 'ул.Репина',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.599097, 33.491652)
                ],
                [
                    'name' => 'кинотеатр Россия',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.599432, 33.488365)
                ],
                [
                    'name' => 'Техучилище',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.600506, 33.483340)
                ],
                [
                    'name' => 'Стрелецкая бухта',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.601647, 33.479161)
                ],
                [
                    'name' => 'ЦУМ',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.597251, 33.488553)
                ],
                [
                    'name' => 'ул.Меньшикова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.592354, 33.487028)
                ],
                [
                    'name' => 'Студенческий городок',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.587924, 33.478857)
                ],
                [
                    'name' => 'ул.Коралловая',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.586398, 33.477742)
                ],
                [
                    'name' => 'завод Маяк',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.583411, 33.478305)
                ],
                [
                    'name' => 'ТЦ Новацентр',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.580626, 33.484551)
                ],
                [
                    'name' => 'Завод ЖБИ',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.579417, 33.477366)
                ],
                [
                    'name' => 'Добрострой на ул.Фиолентвоского шоссе',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.579921, 33.470463)
                ],
                [
                    'name' => 'ул.Степаняна',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.587165, 33.466894)
                ],
                [
                    'name' => 'ул.Колобова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.587433, 33.464711)
                ],
                [
                    'name' => 'ул.Адмирала Юмашева',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.589816, 33.461095)
                ],
                [
                    'name' => 'пр.Октябрьской Революции',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.591762, 33.457338)
                ],
                [
                    'name' => 'ул.Фадеева',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594548, 33.466542)
                ],
                [
                    'name' => 'парк Победы',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594548, 33.452970)
                ],
                [
                    'name' => 'парк Победы',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594548, 33.452970)
                ],
                [
                    'name' => 'пляж Омега',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594078, 33.448180)
                ],
                [
                    'name' => 'пляж Омега',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.594078, 33.448180)
                ],
                [
                    'name' => 'пр.Героев Сталинграда',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.589052, 33.444141)
                ],
                [
                    'name' => 'Китай-город',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.585461, 33.446865)
                ],
                [
                    'name' => 'ул.Блюхера',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.584320, 33.438882)
                ],
                [
                    'name' => 'ул.Бориса Михайлова (поликлиника)',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.578010, 33.442779)
                ],
                [
                    'name' => 'ул.Павла Корчагина',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.586837, 33.434185)
                ],
                [
                    'name' => 'ул.Правды (клуб Артерия)',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.581769, 33.433716)
                ],
                [
                    'name' => 'ул.Правды',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.575144, 33.439126)
                ],
                [
                    'name' => 'ст.Рыбак 7',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.568933, 33.436872)
                ],
                [
                    'name' => 'ул.Анатолия Халина',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.568797, 33.427855)
                ],
                [
                    'name' => 'Казачья Бухта',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.564063, 33.418181)
                ],
                [
                    'name' => 'ул.Казачья',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.561948, 33.418322)
                ],
                [
                    'name' => 'Голубая бухта',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.559531, 33.416531)
                ],
                [
                    'name' => '35-я батарея',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.561478, 33.409205)
                ],
                [
                    'name' => 'Маяк-2',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.582265, 33.383555)
                ],
                [
                    'name' => 'ул.Николая Музыки',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.587493, 33.520265)
                ],
                [
                    'name' => 'ул.Николая Музыки',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.587493, 33.520265)
                ],
                [
                    'name' => 'ул.Кожанова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.590114, 33.516381)
                ],
                [
                    'name' => 'Техническая библиотека',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.583599, 33.518107)
                ],
                [
                    'name' => 'Кинотеатр Москва',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.580476, 33.519294)
                ],
                [
                    'name' => 'пр.Генерала Острякова',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.576235, 33.519887)
                ],
                [
                    'name' => 'магазин Океан',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.573960, 33.520049)
                ],
                [
                    'name' => 'ул.Генерала Хрюкина',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.567597, 33.523610)
                ],
                [
                    'name' => 'ул.Генерала Лебедя',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.561620, 33.526361)
                ],
                [
                    'name' => 'Детский комплекс',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.556066, 33.529436)
                ],
                [
                    'name' => 'школа №38',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.558804, 33.528303)
                ],
                [
                    'name' => '5-й километр Балаклавского шоссе',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.549755, 33.531324)
                ],
                [
                    'name' => 'ТЦ Sea-mall',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.552648, 33.530569)
                ],
                [
                    'name' => 'ул.Лукомская',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.555695, 33.553927)
                ],
                [
                    'name' => 'ул.Сапунская',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.560902, 33.577986)
                ],
                [
                    'name' => 'Сапун гора',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.557701, 33.583705)
                ],
                [
                    'name' => 'Мусоросжигательный завод',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.549459, 33.518306)
                ],
                [
                    'name' => 'Овощебаза',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.555747, 33.497807)
                ],
                [
                    'name' => 'ДРСУ',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.561686, 33.484051)
                ],
                [
                    'name' => 'Фиолентовское шоссе',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.566700, 33.466896)
                ],
                [
                    'name' => 'Депо №1',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.567702, 33.461394)
                ],
                [
                    'name' => 'Электроремонтный завод',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.568397, 33.454489)
                ],
                [
                    'name' => 'Автобат',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.547492, 33.438413)
                ],
                [
                    'name' => '67К-9',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.541512, 33.443430)
                ],
                [
                    'name' => 'СТ-Факел',
                    'location' => new \MStaack\LaravelPostgis\Geometries\Point(44.535262, 33.457078)
                ]
        );
        $dtoCollection->each(function (\App\Services\BusStopService\Dto\BusStopDto $busStopDto) {
            $this->busStopStoreService->store($busStopDto);
        });
    }
};
