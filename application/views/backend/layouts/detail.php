<?php if(isset($category) && count($category))
					{
						foreach ($category as $key => $val){
							 echo 'Mã số: ' . $val['id_cat'];
						}
					}
?> 