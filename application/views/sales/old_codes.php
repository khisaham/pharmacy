 <?php $data['mark_obtained'] = $this->input->post('mark_obtained');
             $data['date_entered'] = strtotime(date('Y-m-d'));
            $data['comment']       = $this->input->post('comment');
           
         $student_id = $this->input->post('student_id');
        $page_data['exam_id']    = $exam_id;
        $page_data['year']    = $year;
        $page_data['term_id']    = $term_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;

        $mark= $this->input->post('comment');

           $student_id= $this->input->post('student_id');
           $subject_id = $this->input->post('subject_id');
           $class_id = $this->input->post('class_id');
           $term_id = $this->input->post('term_id'); 
            //$this->db->where('subject_id', $subject_id);
            // $this->db->where('term_id', $term_id);
            // $this->db->where('class_id', $class_id);
            // $this->db->where('year', $year);
// $sum = $this->db->query("SELECT sum(mark_obtained) as 'sum' FROM mark WHERE student_id='$student_id' AND class_id ='$class_id' AND subject_id ='$subject_id' AND term_id='$term_id' AND year ='$year' AND exam_id != '$email_id' ")->row()->sum;
// //$sum = $this->db->get_where('mark', array('student_id'=>$row['student_id'], 'term_id'=>$term_id, 'subject_id'=>$subject_id,'class_id'=>$class_id, 'year'=>$year))->result_array();
 $exam1 = $this->db->get('exam');
 $number_of_exams = $exam1->num_rows();
 //$mark = round($sum/$number_of_exams);

$this->db->query("UPDATE averages SET mark ='$mark' WHERE student_id='$student_id' AND subject_id='$subject_id' AND class_id='$class_id' AND term_id='$term_id'");

            $this->db->where('mark_id', $this->input->post('mark_id'));
           $this->db->update('mark', $data);
          ?>