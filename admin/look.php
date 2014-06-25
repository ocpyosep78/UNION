<h1>Hasil Pencarian</h1>
                        
					<?php
						error_reporting(E_ALL ^ E_DEPRECATED);
						$namahost = 'localhost';
						$dbusername = 'root';
						$dbpassword = '';
						$namabase = 'union';

						$koneksi = mysql_connect($namahost,$dbusername,$dbpassword);
						if (!$koneksi)
						{
							die('Database tidak terkoneksi: ' . mysql_error());
						}

						mysql_select_db($namabase, $koneksi);
						
						if (!empty($_REQUEST['cari'])) 
						{

						$cari = mysql_real_escape_string($_REQUEST['cari']);     
						
						$sql = "SELECT * FROM tb_staff WHERE staff_nama LIKE '%".$cari."%'"; 
						$querycari = mysql_query($sql); 
						
						  echo "<table id='box-table-a'>
								<tr>
									<th scope='col'>Profil</th>
				                    <th scope='col'>Staff ID</th>
				                    <th scope='col'>NAMA</th>
				                    <th scope='col'>Jabatan</th>
				                    <th scope='col'>Alamat</th>
				                    <th scope='col'>Pendidikan</th>
				                    <th scope='col'>Kontak</th>
								</tr>";
					
						if ($row = mysql_fetch_array($querycari))
					  {  
						echo '<br />Data Ditemukan !'; ?>
						<td><?php echo "<img src='../admin/images/staff/$row[staff_foto]' width='80' height='80'>";?></td> <?php
						echo '<td>' .$row['staff_id'] . '</td>'; 
						echo '<td>' .$row['staff_nama'] . '</td>'; 
						echo '<td>' .$row['staff_jabatan'] . '</td>'; 
						echo '<td>' .$row['staff_alamat'] . '</td>'; 
						echo '<td>' .$row['staff_pendidikan'] . '</td>';
						echo '<td>' .$row['staff_kontak'] . '</td>'; ?>
						
		                <td><a href="../admin/staff_edit.php?id=<?php echo "$row[staff_id]";?>"><img src="../admin/images/edit.png"</a></td>
		                <td><a href="../admin/del_staff.php?id=<?php echo "$row[staff_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
		                    <img src="../admin/images/hapus.png"</a>
		                </td> <?php
						echo '</table>';
					   } 
						else
						{
						echo '<td>'."Data Kosong".'</td>';  
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '</tr>';
						echo '</table>';
						}
						}
					
					?>	