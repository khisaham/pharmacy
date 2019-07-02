          <?php


                    ?> 
                    <tr style="border: .1em solid #000">
                        <td style="border: .1em solid #000; text-align:center;"><?php echo $row1['studeid']; ?></td>
                        <td style="border: .1em solid #000; text-align:center;"><?php echo $row1['name']; ?></td>
                        <td style="border: .1em solid #000; text-align:center;"><?php echo $position; ?></td>
                        <td style="border: .1em solid #000; text-align:center;"><?php echo $rowmark['avg']; ?></td>
                        <td style="border: .1em solid #000; text-align:center;"><?php echo $row1['kcpe']; ?></td>
                       <?php
                       //$this->db->order_by('sum(mark)');
 $sm = $this->db->query("SELECT * FROM subject, averages WHERE subject.subject_id = averages.subject_id AND averages.class_id=subject.class_id AND averages.class_id='$class_id' AND student_id='$student_id' ORDER BY mark DESC")->result_array();
        foreach ($sm as $rm):
            $fscore = $rm['mark'];
                       ?>
                   <td style="border: .1em solid #000; text-align:center;"><?php echo $fscore; ?></td>
               
                   <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                    <?php endforeach; ?> 