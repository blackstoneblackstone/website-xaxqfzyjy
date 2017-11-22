<li class="last">
									<a href="javascript:;">
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