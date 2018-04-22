<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::$app->request->baseUrl ?>/cover/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
       search form -->

		<?php 
		use hscstudio\mimin\components\Mimin;
		$distribusi = [
                        'label' => 'Bidang Distribusi',
                        'icon' => 'fa fa-diamond',
                        'url' => '#',
                        'items' => [
						['label' => 'Akomodasi', 'icon' => 'fa fa-file-code-o', 'url' => ['/akomodasi/index'],],
						['label' => 'Angkutan Udara', 'icon' => 'fa fa-file-code-o', 'url' => ['/angkutanudara/index'],],
						['label' => 'Ekspor', 'icon' => 'fa fa-file-code-o', 'url' => ['/perkembanganekspor/index'],],
                            ['label' => 'Ekspor Menurut Golongan', 'icon' => 'fa fa-file-code-o', 'url' => ['/ekspormenurutbeberapagolongan/index'],],
                            ['label' => 'IHP', 'icon' => 'fa fa-file-code-o', 'url' => ['/ihp/index'],],
                            ['label' => 'IHPB', 'icon' => 'fa fa-file-code-o', 'url' => ['/ihpb/index'],],
                            ['label' => 'IHK', 'icon' => 'fa fa-file-code-o', 'url' => ['/ihk/index'],],
                            ['label' => 'Inflasi', 'icon' => 'fa fa-file-code-o', 'url' => ['/inflasi/index'],],
                            
                            ['label' => 'Impor', 'icon' => 'fa fa-file-code-o', 'url' => ['/perkembanganimpor/index'],],
							['label' => 'Impor Menurut Golongan', 'icon' => 'fa fa-file-code-o', 'url' => ['/impormenurutbeberapagolongan/index'],],
                       /*     [
                        'label' => 'Neraca Perdagangan',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kaltim', 'icon' => 'fa fa-file-code-o', 'url' => ['/neracaperdagangankaltim/index'],],
                            ['label' => 'Kaltara', 'icon' => 'fa fa-dashboard', 'url' => ['/neracaperdagangankaltara/index'],],

                        ],
                    ],
					[
                        'label' => 'Volume Muat',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kaltim', 'icon' => 'fa fa-file-code-o', 'url' => ['/vlmemuatkaltim/index'],],
                            ['label' => 'Kaltara', 'icon' => 'fa fa-dashboard', 'url' => ['/vlmemuatkaltara/index'],],

                        ],
                    ],					
					[
                        'label' => 'Nilai Muat',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kaltim', 'icon' => 'fa fa-file-code-o', 'url' => ['/nilaimuatkaltim/index'],],
                            ['label' => 'Kaltara', 'icon' => 'fa fa-dashboard', 'url' => ['/nilaimuatkaltara/index'],],

                        ],
                    ],					
					[
                        'label' => 'Volume Bongkar',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kaltim', 'icon' => 'fa fa-file-code-o', 'url' => ['/vlmebongkarkaltim/index'],],
                            ['label' => 'Kaltara', 'icon' => 'fa fa-dashboard', 'url' => ['/vlmebongkarkaltara/index'],],

                        ],
                    ],					
					[
                        'label' => 'Nilai Bongkar',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kaltim', 'icon' => 'fa fa-file-code-o', 'url' => ['/nilaibongkarkaltim/index'],],
                            ['label' => 'Kaltara', 'icon' => 'fa fa-dashboard', 'url' => ['/nilaibongkarkaltara/index'],],

                        ],
                    ], */
					['label' => 'Klasifikasi Hotel', 'icon' => 'fa fa-file-code-o', 'url' => ['/klasifikasibintang/index'],],
					
					
					['label' => 'NTP', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntp/index'],],
					['label' => 'NTPP', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntpp/index'],],
					['label' => 'NTPH', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntph/index'],],
					['label' => 'NTPR', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntpr/index'],],
					['label' => 'NTPT', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntpt/index'],],
					['label' => 'NTN', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntn/index'],],
					['label' => 'NTNP', 'icon' => 'fa fa-file-code-o', 'url' => ['/ntnp/index'],],
                        ],
                    ];
		//$distribusi = Mimin::filterMenu($distribusi);
		$menuItems = [
                    ['label' => 'Menu Kuesioner', 'options' => ['class' => 'header']],
                    ['label' => 'Profil', 'icon' => 'fa fa-user', 'url' => ['/site/profil']],
                    ['label' => 'Panduan', 'icon' => 'fa fa-sticky-note', 'url' => \yii\helpers\Url::to('@web/excel/panduan.pdf')],
                    [
                        'label' => 'Input',
                        'icon' => 'fa fa-group',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data', 'icon' => 'fa fa-user', 'url' => ['/site/inputdata'],],
                            ['label' => 'Fenomena', 'icon' => 'fa fa-wrench', 'url' => ['/site/fenomena'],],

                            [
                                'label' => 'Series Data',
                                'icon' => 'fa fa-group',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'ATAP', 'icon' => 'fa fa-circle-o', 'url' => ['atap/index'],],
                                    ['label' => 'Fenomena', 'icon' => 'fa fa-wrench', 'url' => ['/site/fenomena'],],
                                ],
                            ],
                        ],
                    ],
					[
                        'label' => 'Publikasi',
                        'icon' => 'fa fa-group',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tabel Pokok', 'icon' => 'fa fa-user', 'url' => ['/site/tabelpokok'],],
                            //['label' => 'Infografis', 'icon' => 'fa fa-wrench', 'url' => ['/site/infografis'],],
                        ],
                    ],
					[
                        'label' => 'Analisis',
                        'icon' => 'fa fa-tint',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Series Data', 'icon' => 'fa fa-file-code-o', 'url' => ['/site/data-series'],],
                            ['label' => 'Fenomena', 'icon' => 'fa fa-file-code-o', 'url' => ['/site/tabel-fenomena'],],
                   

                        ],
                    ],					                    
					['label' => 'Forum Diskusi', 'icon' => 'fa fa-university', 'url' => ['/site/forum']],
                ];
		
		
		$menuItems = Mimin::filterMenu($menuItems);
		?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuItems,
            ]
        ) ?>

    </section>

</aside>
