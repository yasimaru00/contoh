<?php

use App\Models\Recruitment\VacancyQuestion;
use Illuminate\Database\Seeder;

class VacancyQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda pernah melamar di group / perusahaan ini sebelumnya,bilamana dan sebagai apa?';
        $data->foreign_question ='Have you previously applied to our company / group, if so, when and what position?';
        $data->option = '';
        $data->save();

        //2
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Selain disini, di perusahaan mana saja anda melamar dan sebagai apa?';
        $data->foreign_question ='Are you also applying to other companies? If yes, please mention what companies and position applied?';
        $data->option = '';
        $data->save();

        //3
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda terikat kontrak dengan perusahaan tempat anda bekerja saat ini?';
        $data->foreign_question ='Are you under any contract agreement with other companies?';
        $data->option = '';
        $data->save();

        //4
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda mempunyai pekerjaan sampingan/part time, di perusahaan apa dan sebagai apa?';
        $data->foreign_question ='Do you have any part time job? Specify the name of the company and position held?';
        $data->option = '';
        $data->save();

        //5
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda berkeberatan bila kami meminta referensi pada perusahaan tempat anda pernah bekerja?';
        $data->foreign_question ='Do you have any objections if we contact your previous employer for reference cheking?';
        $data->option = '';
        $data->save();

        //6
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda keberatan bila kami melihat referensi dari sosial media yang anda miliki?';
        $data->foreign_question ='Do you have any objections if we check your social media account for reference checking?';
        $data->option = '';
        $data->save();

        //7
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda mempunyai teman/sanak saudara yang bekerja di perusahaan ini. Jika ada, sebutkan nama dan hubungan dengan anda?';
        $data->foreign_question ='Do you have any acquitance or relatives employed by this company, if have, please mention name and your relationship?';
        $data->option = '';
        $data->save();

        //8
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda pernah menderita sakit keras/kronis/kecelakaan berat / operasi. Bilamana dan penyakit macam apa, jelaskan?';
        $data->foreign_question ='What serious illnes/surgeries/accidents have you ever had, anda when you had it?';
        $data->option = '';
        $data->save();

        //9
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda pernah mengikuti pemeriksaan psikologis/psikotes. Kapan, di mana, dan untuk keperluan apa?';
        $data->foreign_question ='Have you ever undergone any psychologycal test before? If so, where and for what purpose?';
        $data->option = '';
        $data->save();

        //10
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Apakah anda pernah berurusan dengan kepolisian karena tindak kejahatan?';
        $data->foreign_question ='Have you ever been involved in any administrative, civil, or criminal case?';
        $data->option = '';
        $data->save();

        //11
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Bila diterima, bersediakah anda bertugas di luar kota?';
        $data->foreign_question ='If accepted, do you agree to be out of Jakarta assigment?';
        $data->option = '';
        $data->save();
        
        //12
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Bila diterima, bersediakah anda ditempatkan di seluruh daerah di Indonesia?';
        $data->foreign_question ='If accepted, do you agree to be located anywhere in Indonesia?';
        $data->option = '';
        $data->save();

        //13
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Macam pekerjaan apakah yang sesuai dengan rencana karir anda?';
        $data->foreign_question ='Describe any kind of jobs that be in line with your career plan?';
        $data->option = '';
        $data->save();

        //14
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Macam pekerjaan yang bagaimanakah yang tidak anda sukai?';
        $data->foreign_question ='Describe any kind of jobs that you do not like?';
        $data->option = '';
        $data->save();

        //15
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Berapa besar penghasilan anda sebulan dan fasiltas macam apa yang anda peroleh saat ini?';
        $data->foreign_question ='Please state your current monthly income and facilities?';
        $data->option = '';
        $data->save();

        //16
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Bila diterima, berapa gaji dan fasilitas yang anda harapkan?';
        $data->foreign_question ='State salary and facilities desired?';
        $data->option = '';
        $data->save();

        //17
        $data = new VacancyQuestion;
        $data->vacancy_id = 1;
        $data->question = 'Bila diterima, kapan anda dapat mulai bekerja?';
        $data->foreign_question ='If accepted, when can you start working?';
        $data->option = '';
        $data->save();
    }
}
