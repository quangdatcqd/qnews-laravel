<div class="row">
    <div class="col-lg-9">

        <?php
        use App\Http\Controllers\TinController;
        $TL = DB::table('theloai')
            ->select('idTL', 'TenTL')
            ->where('AnHien', '1')
            ->orderby('ThuTu', 'asc')
            ->offset(0)
            ->limit(2)
            ->get();
        
        ?>
        @foreach ($TL as $TL)

            <?php
            
            $tinmoiTL = DB::table('tin')
                ->select('TieuDe', 'TenTL', 'slugLT','slug', 'Ten', 'Ngay', 'idTin', 'tin.idLT', 'TomTat', 'urlHinh')
                ->join('theloai', 'tin.idTL', '=', 'theloai.idTL')
                ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
                ->where('tin.AnHien', '1')
                ->where('tin.lang', 'vi')
                ->where('tin.idTL', $TL->idTL)
                ->orderby('Ngay', 'desc')
                ->offset(0)
                ->limit(3)
                ->get();
            
            $tacgia = 'Quang Đạt';
            
            ?>


            <div class="blog-list clearfix">
                <div class="section-title">
                    <h3 class="color-green"><a title="">{{ $TL->TenTL }}</a></h3>
                </div><!-- end title -->

                @foreach ($tinmoiTL as $row)
                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ url("/chi-tiet-tin/".$row->slug)  }}"
                                    title="">
                                    <img src="{{ $row->urlHinh }}" onerror="this.src='upload/default.jpg'"
                                        class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h3><a href="{{ url("/chi-tiet-tin/".$row->slug)  }}"
                                    title="">{{ $row->TieuDe }}</a></h3>
                            <p>@php
                                echo $row->TomTat
                            @endphp</p>
                            <small><a href="{{ action([TinController::class, 'tinTrongLoai'], ['id' => $row->slugLT]) }}"
                                    title="">{{ $row->Ten }}</a></small>
                            <small><a title="">{{ date('d/m/Y', strtotime($row->Ngay)) }}</a></small>
                            <small><a href="#" title="">{{ $tacgia }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                @endforeach


            </div><!-- end blog-list -->
            <hr class="invis">
        @endforeach


        {{-- <div class="blog-list clearfix">
            <div class="section-title">
                <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3>
            </div><!-- end title -->

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_square_05.jpg" onerror="this.src='upload/default.jpg'"   class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                        Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                        tempor odio.</p>
                    <small><a href="blog-category-01.html" title="">Food</a></small>
                    <small><a href="single.html" title="">11 July, 2017</a></small>
                    <small><a href="blog-author.html" title="">by Matilda</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_square_06.jpg" onerror="this.src='upload/default.jpg'"   class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                        Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                        tempor odio.</p>
                    <small><a href="blog-category-01.html" title="">Food</a></small>
                    <small><a href="single.html" title="">10 July, 2017</a></small>
                    <small><a href="blog-author.html" title="">by Matilda</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_square_07.jpg" onerror="this.src='upload/default.jpg'"   class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor.
                        Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus
                        tempor odio.</p>
                    <small><a href="blog-category-01.html" title="">Food</a></small>
                    <small><a href="single.html" title="">09 July, 2017</a></small>
                    <small><a href="blog-author.html" title="">by Matilda</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->
        </div><!-- end blog-list --> --}}
    </div><!-- end col -->
