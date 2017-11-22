<li [field:pubdate runphp='yes'] $ntime = time(); $day3 = 3600 * 24 * 3; if(($ntime - @me) < $day3) @me = "class='last'"; else @me = ""; [/field:pubdate]>
									<a href="[field:arcurl/]">
										<div class="part1_r_date">
											<span class="part1_r_date_d">[field:pubdate function='strftime("%d",@me)'/]</span>
											<span class="part1_r_date_ym">[field:pubdate function='strftime("%Y-%m",@me)'/]</span>
										</div>
										<div class="part1_r_info">
											<div class="part1_r_tit">
												[field:title/]
											</div>
											<div class="part1_r_desc">
												[field:description function="cn_substr(@me,80)"/]...
											</div>
										</div>
									</a>
								</li>