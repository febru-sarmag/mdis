<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit mitra Kerja</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','mitraKerja','view') ? anchor('pegawai/mitraKerja/view', '<span class="icon_text preview"></span>Daftar mitra Kerja', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/mitraKerja/edit/id/'.$dataEdit['id_mitra'].'/time/' . time(),array('name'=>'formAddmitraKerja'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($dataEdit,'nama_mitra'), 'class' => 'form-field	'));?>
                       
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <?php echo form_textarea(array('name'=>'address','value'=>get_data($dataEdit,'alamat_mitra'), 'class' => 'form-field	',"style"=>"width: 400px;height: 100px;"));?>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo form_submit('submit','Simpan', 'class="button themed"');?>
                    </td>
                </tr>
            </table>
            </form>
            <?php endif;?>

          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>

<?php $this->load->view('footer') ?>