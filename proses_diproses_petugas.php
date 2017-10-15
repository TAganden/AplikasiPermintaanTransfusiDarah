<?php
session_start();
require('koneksi.php');
$link = koneksi_db();
$id = $_GET['id'];


//mengambil data permintaan
$sql_permintaan = "select * from permintaan_transfusi where permintaan_id=$id";
$res_permintaan = mysqli_query($link,$sql_permintaan);
$data_permintaan = mysqli_fetch_array($res_permintaan);
$gol_darah = $data_permintaan['GOLONGAN_DARAH'];
$jenis_darah = $data_permintaan['JENIS_DARAH'];
$gol_darah1 = $data_permintaan['GOLONGAN_DARAH'];
$jenis_darah1 = $data_permintaan['JENIS_DARAH'];

require('query_darah.php');


if($ketemu>0){
	
	$stok_baru = $data['STOK_DARAH'] - $data_permintaan['JUMLAH'];
	if($stok_baru>=0){
		$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'diproses',CURTIME(),CURDATE())";
		$res_status = mysqli_query($link,$sql_status);

		$sql_ubah_stok = "update gol_darah set stok_darah='$stok_baru' where golongan_darah='$gol_darah' and jenis_darah='$jenis_darah'";
		$res_ubah_stok = mysqli_query($link,$sql_ubah_stok);
		
		$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah', jenis_darah='$jenis_darah' where permintaan_id='$id'";
		$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
	}elseif($stok_baru<0){
		$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
		$res_status = mysqli_query($link,$sql_status);
	}
	
	
	echo ("<script> location.href ='petugas.php?menu=permintaan&action=tampil';</script>");
}else if($ketemu==0){	
	
	if($gol_darah1=="AB+"){
		$gol_darah="AB-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="B+";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="B-";
				require('query_darah.php');
			
				if($ketemu==0){
					$gol_darah="A+";
					require('query_darah.php');
			
					if($ketemu==0){
						$gol_darah="A-";
						require('query_darah.php');

						if($ketemu==0){
							$gol_darah="O+";
							require('query_darah.php');

							if($ketemu==0){
								$gol_darah="O-";
								require('query_darah.php');
			
								if($ketemu==0){
									$gol_darah="AB+";
									$jenis_darah="Whole Blood";
									require('query_darah.php');
			
									if($ketemu==0){
										$gol_darah="AB-";
										$jenis_darah="Whole Blood";
										require('query_darah.php');
			
										if($ketemu==0){
											$gol_darah="B+";
											$jenis_darah="Whole Blood";
											require('query_darah.php');
			
											if($ketemu==0){
												$gol_darah="B-";
												$jenis_darah="Whole Blood";
												require('query_darah.php');

												if($ketemu==0){
													$gol_darah="A+";
													$jenis_darah="Whole Blood";
													require('query_darah.php');

													if($ketemu==0){
														$gol_darah="A-";
														$jenis_darah="Whole Blood";
														require('query_darah.php');

														if($ketemu==0){
															$gol_darah="O+";
															$jenis_darah="Whole Blood";
															require('query_darah.php');

															if($ketemu==0){
																$gol_darah="O-";
																$jenis_darah="Whole Blood";
																require('query_darah.php');
																	
																if($ketemu==0){
																	$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
																	$res_status = mysqli_query($link,$sql_status);
																	
																	$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
																	$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
																}elseif($ketemu>0){
																	require('query_diproses_berhasil.php');
																}
															}elseif($ketemu>0){
																require('query_diproses_berhasil.php');
															}
														}elseif($ketemu>0){
															require('query_diproses_berhasil.php');
														}
													}elseif($ketemu>0){
														require('query_diproses_berhasil.php');
													}
												}elseif($ketemu>0){
													require('query_diproses_berhasil.php');
												}
											}elseif($ketemu>0){
												require('query_diproses_berhasil.php');
											}
										}elseif($ketemu>0){
											require('query_diproses_berhasil.php');
										}
									}elseif($ketemu>0){
										require('query_diproses_berhasil.php');
									}
								}elseif($ketemu>0){
									require('query_diproses_berhasil.php');
								}
							}elseif($ketemu>0){
								require('query_diproses_berhasil.php');
							}
						}elseif($ketemu>0){
							require('query_diproses_berhasil.php');
						}
					}elseif($ketemu>0){
						require('query_diproses_berhasil.php');
					}
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}else if($gol_darah1=="AB-"){

		$gol_darah="B-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="A-";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				require('query_darah.php');
			
				if($ketemu==0){
					$gol_darah="AB-";
					$jenis_darah="Whole Blood";
					require('query_darah.php');
			
					if($ketemu==0){
						$gol_darah="B-";
						$jenis_darah="Whole Blood";
						require('query_darah.php');

						if($ketemu==0){
							$gol_darah="A-";
							$jenis_darah="Whole Blood";
							require('query_darah.php');

							if($ketemu==0){
								$gol_darah="O-";
								$jenis_darah="Whole Blood";
								require('query_darah.php');
			
								if($ketemu==0){
									$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
									$res_status = mysqli_query($link,$sql_status);
									
									$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
									$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
								}elseif($ketemu>0){
									require('query_diproses_berhasil.php');
								}
							}elseif($ketemu>0){
								require('query_diproses_berhasil.php');
							}
						}elseif($ketemu>0){
							require('query_diproses_berhasil.php');
						}
					}elseif($ketemu>0){
						require('query_diproses_berhasil.php');
					}
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="B+"){
		$gol_darah="B-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="O+";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				require('query_darah.php');
			
				if($ketemu==0){
					$gol_darah="B+";
					$jenis_darah="Whole Blood";
					require('query_darah.php');
			
					if($ketemu==0){
						$gol_darah="B-";
						$jenis_darah="Whole Blood";
						require('query_darah.php');

						if($ketemu==0){
							$gol_darah="O+";
							$jenis_darah="Whole Blood";
							require('query_darah.php');

							if($ketemu==0){
								$gol_darah="O-";
								$jenis_darah="Whole Blood";
								require('query_darah.php');
			
								if($ketemu==0){
									$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
									$res_status = mysqli_query($link,$sql_status);
									
									$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
									$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
								}elseif($ketemu>0){
									require('query_diproses_berhasil.php');
								}
							}elseif($ketemu>0){
								require('query_diproses_berhasil.php');
							}
						}elseif($ketemu>0){
							require('query_diproses_berhasil.php');
						}
					}elseif($ketemu>0){
						require('query_diproses_berhasil.php');
					}
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="B-"){
		$gol_darah="O-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="B-";
			$jenis_darah="Whole Blood";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				$jenis_darah="Whole Blood";
				require('query_darah.php');
			
				if($ketemu==0){
					$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
					$res_status = mysqli_query($link,$sql_status);
					
					$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
					$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="A+"){
		$gol_darah="A-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="O+";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				require('query_darah.php');
			
				if($ketemu==0){
					$gol_darah="A+";
					$jenis_darah="Whole Blood";
					require('query_darah.php');
			
					if($ketemu==0){
						$gol_darah="A-";
						$jenis_darah="Whole Blood";
						require('query_darah.php');

						if($ketemu==0){
							$gol_darah="O+";
							$jenis_darah="Whole Blood";
							require('query_darah.php');

							if($ketemu==0){
								$gol_darah="O-";
								$jenis_darah="Whole Blood";
								require('query_darah.php');
			
								if($ketemu==0){
									$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
									$res_status = mysqli_query($link,$sql_status);
									
									$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
									$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
								}elseif($ketemu>0){
									require('query_diproses_berhasil.php');
								}
							}elseif($ketemu>0){
								require('query_diproses_berhasil.php');
							}
						}elseif($ketemu>0){
							require('query_diproses_berhasil.php');
						}
					}elseif($ketemu>0){
						require('query_diproses_berhasil.php');
					}
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="A-"){
		$gol_darah="O-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="A-";
			$jenis_darah="Whole Blood";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				$jenis_darah="Whole Blood";
				require('query_darah.php');
			
				if($ketemu==0){
					$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
					$res_status = mysqli_query($link,$sql_status);
					
					$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
					$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="O+"){
		$gol_darah="O-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="O+";
			$jenis_darah="Whole Blood";
			require('query_darah.php');
			
			if($ketemu==0){
				$gol_darah="O-";
				$jenis_darah="Whole Blood";
				require('query_darah.php');
			
				if($ketemu==0){
					$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
					$res_status = mysqli_query($link,$sql_status);
					
					$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
					$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
				}elseif($ketemu>0){
					require('query_diproses_berhasil.php');
				}
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}elseif($gol_darah1=="O-"){
		$gol_darah="O-";
		require('query_darah.php');
		
		if($ketemu==0){
			$gol_darah="O-";
			$jenis_darah="Whole Blood";
			require('query_darah.php');
			
			if($ketemu==0){
				$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
				$res_status = mysqli_query($link,$sql_status);
				
				$sql_update_permintaan = "update permintaan_transfusi set golongan_darah='$gol_darah1', jenis_darah='$jenis_darah1' where permintaan_id='$id'";
				$res_update_permintaan = mysqli_query($link,$sql_update_permintaan);
			}elseif($ketemu>0){
				require('query_diproses_berhasil.php');
			}
		}elseif($ketemu>0){
			require('query_diproses_berhasil.php');
		}
	}
	
	echo ("<script> location.href ='petugas.php?menu=permintaan&action=tampil';</script>");
}
?>