<?php

namespace App\Http\Controllers;


use App\course;
use App\coursedetail;
use App\messagebox;
use App\uploaddoc;
use App\blogging;
use Illuminate\Http\Request;
use App\User, App\role, App\news, App\subject, App\scheduleslot, App\schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    //GET() FUNCTION: get information of student
    public function getStudentProfile()
    {
        //$user = User::all();
        $role = role::all();
        return view('client.student.profile', ['role' => $role]);
    }

    //GET() FUNCTION: get information of tutor
    public function getTutorProfile()
    {
        //$user = User::all();
        $role = role::all();
        return view('client.tutor.profile', ['role' => $role]);
    }

    //GET() FUNCTION: get information of staff
    public function getStaffProfile()
    {
        //$user = User::all();
        $role = role::all();
        return view('client.staff.profile', ['role' => $role]);
    }

    //POST() Method: Edit information of student
    public function postEditStudentProfile(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|min:5'
        ], [
            'name.required' => 'You have to enter the student title',
            'name.min' => 'You must input more than 5 characters',
        ]);

        $user->name = $request->name;
        //$user -> email = $request -> email;
        //$user -> password = bcrypt($request -> password);
        //$user -> idRole = $request -> idRole;
        $user->facebook = $request->facebook;
        $user->phone = $request->phone;
        //$user -> dateOfBirth = $request -> dateOfBirth;
        $user->address = $request->address;
        if ($request->checkpassword == "1") {
            $user->password = bcrypt($request->password);
        }
//        if($request -> hasFile('image'))
//        {
//            $file = $request -> file('image');
//            $image = $file ->getClientOriginalName();
//            $file -> move('admin_asset/upload/image/student', $image);
//            $user -> image = $image;
//        }
        //$user -> gender = $request -> gender;
        //$user -> status = $request -> status;
//        if ($request -> status == 1){
//            $user -> status = 1;
//        } else {
//            $user -> status = 0;
//        }
        //echo $student -> status;
        $user->save();
        return redirect('client/student/profile')->with('notificate', 'Update successfully');
    }

    //POST() Method: Edit information of Tutor
    public function postEditTutorProfile(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|min:5'
        ], [
            'name.required' => 'You have to enter the student title',
            'name.min' => 'You must input more than 5 characters',
        ]);

        $user->name = $request->name;
        //$user -> email = $request -> email;
        //$user -> password = bcrypt($request -> password);
        //$user -> idRole = $request -> idRole;
        $user->facebook = $request->facebook;
        $user->phone = $request->phone;
        //$user -> dateOfBirth = $request -> dateOfBirth;
        $user->address = $request->address;
        if ($request->checkpassword == "1") {
            $user->password = bcrypt($request->password);
        }
//        if($request -> hasFile('image'))
//        {
//            $file = $request -> file('image');
//            $image = $file ->getClientOriginalName();
//            $file -> move('admin_asset/upload/image/student', $image);
//            $user -> image = $image;
//        }
        //$user -> gender = $request -> gender;
        //$user -> status = $request -> status;
//        if ($request -> status == 1){
//            $user -> status = 1;
//        } else {
//            $user -> status = 0;
//        }
        //echo $student -> status;
        $user->save();
        return redirect('client/tutor/profile')->with('notificate', 'Update successfully');
    }

    //POST() Method: Edit information of staff
    public function postEditStaffProfile(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|min:5'
        ], [
            'name.required' => 'You have to enter the student title',
            'name.min' => 'You must input more than 5 characters',
        ]);

        $user->name = $request->name;
        $user->facebook = $request->facebook;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->checkpassword == "1") {
            $user->password = bcrypt($request->password);
            echo "success";
        }
//        if($request -> hasFile('image'))
//        {
//            $file = $request -> file('image');
//            $image = $file ->getClientOriginalName();
//            $file -> move('admin_asset/upload/image/student', $image);
//            $user -> image = $image;
//        }
        //$user -> gender = $request -> gender;
        //$user -> status = $request -> status;
//        if ($request -> status == 1){
//            $user -> status = 1;
//        } else {
//            $user -> status = 0;
//        }
        //echo $student -> status;
        //$user -> email = $request -> email;
        //$user -> password = bcrypt($request -> password);
        //$user -> idRole = $request -> idRole;
        //$user -> dateOfBirth = $request -> dateOfBirth;
        $user->save();
        return redirect('client/staff/profile')->with('notificate', 'Update successfully');
    }

    //GET() Method: Get news
    public function getListStudentNews()
    {
        $news = news::all();
        return view('client.student.news', ['news' => $news]);
    }

    //GET() Method: Get news detail
    public function getDetailStudentNews($id)
    {
        $news = news::find($id);
        return view('client.student.newsdetail', ['news' => $news]);
    }

    //GET() Method: Get news
    public function getListStaffNews()
    {
        $news = news::all();
        return view('client.staff.news', ['news' => $news]);
    }

    //GET() Method: Get news detail
    public function getDetailStaffNews($id)
    {
        $news = news::find($id);
        return view('client.staff.newsdetail', ['news' => $news]);
    }

    //GET() Method: Get news
    public function getListTutorNews()
    {
        $news = news::all();
        return view('client.tutor.news', ['news' => $news]);
    }

    //GET() Method: Get news detail
    public function getDetailTutorNews($id)
    {
        $news = news::find($id);
        return view('client.tutor.newsdetail', ['news' => $news]);
    }

    //GET() Method: Get view for course in staff site
    public function getListStaffCourse()
    {
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('client.staff.course', ['user' => $user, 'subject' => $subject, 'course' => $course]);

    }

    //GET() Method: Get list of course for messages in student site
    public function getListCourse()
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        return view('client.student.message', ['coursedetail' => $coursedetail, 'user' => $user, 'course' => $course]);
    }

    //GET() Method: Get list of course for messages in tutor site
    public function getListCourse2()
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idTutor)
                foreach ($course as $co){
                    if ($cd -> idCourse == $co -> id){
                        $array_course[] = $co -> id;
                    }
                }
        }
        $unique_course = array_unique($array_course);
        return view('client.tutor.message', ['coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'unique_course' => $unique_course]);
    }

    //GET() Method: view coursedetail of staff site
    public function getEditStaffCourse(Request $request)
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('client.staff.editcourse',
            ['user' => $user, 'subject' => $subject, 'course' => $course, 'coursedetail' => $coursedetail]);

    }

    //POST() Method: function search course of staff site
    public function postSearchStaffCourse(Request $request)
    {
        $coursedetail = coursedetail::all();
        $nameCourse = $request->nameCourse;
        $user = User::all();
        $subject = subject::all();
        $course = course::where('id', 'like', "%$nameCourse%")->get();
        return view('client.staff.showcourse', [
            'subject' => $subject,
            'user' => $user,
            'course' => $course,
            'nameCourse' => $nameCourse,
            'coursedetail' => $coursedetail
        ]);

    }

    //POST() Method: function search subject of staff site
    public function postSearchStaffCourse2(Request $request)
    {
        $coursedetail = coursedetail::all();
        $nameSub = $request->nameSub;
        $course = course::all();
        $user = User::all();
        $subject = subject::where('id', 'like', "%$nameSub%")->get();
        return view('client.staff.showcourse2', [
            'course' => $course,
            'subject' => $subject,
            'nameSub' => $nameSub,
            'user' => $user,
            'coursedetail' => $coursedetail
        ]);

    }

    //POST() Method: function add(ALLOCATE) a new tutor for course/student
    public function postAddStaffCourse(Request $request)
    {
        $course = course::all();
        $user = User::all();
        $subject = subject::all();

        if (isset($request->student)) {
            $Coursedetail = coursedetail::all();

            $count = $Coursedetail->count();
            $count2 = 0;

            if ($count == 0) {
                $id = 1;
            } else {
                $array = $Coursedetail[$count - 1]->id + 1;
                $id = $array;
            }

            // Submitted class
            $idStudent = $request->student;
            $idCourse = $request->idCourse;
            $idTutor = $request->idTutor;
            $idSubject = $request->idSubject;

            // Validate choose class


            foreach ($user as $us) {
                if ($us->id == $idTutor) {
                    $emailTutor = $us->email;
                }
            }

            // class records to be saved
            $coursedetail_records = [];

            // Add needed information to class records
            foreach ($idStudent as $req) {
                $count2++;

                $this->validate($request, [
                    'idSubject' => [
                        Rule::unique('coursedetail')->where(function ($query) use ($req, $idSubject) {
                            return $query->where('idSubject', $idSubject)
                                ->where('idStudent', $req);
                        })
                    ],
                    'idCourse' => [
                        Rule::unique('coursedetail')->where(function ($query) use ($req, $idCourse) {
                            return $query->where('idCourse', $idCourse)
                                ->where('idStudent', $req);
                        })
                    ]
                ], [

                ]);

                if (!empty($req)) {
                    foreach ($user as $us) {
                        if ($us->id == $req) {
                            $email = $us->email;
                        }
                    }

                    // Formulate record that will be saved
                    $coursedetail_records[] = [
                        'id' => ($id + $count2) - 1,
                        'idCourse' => $idCourse,
                        'idTutor' => $idTutor,
                        'idSubject' => $idSubject,
                        'idStudent' => $req
                    ];

                    Mail::send('mailing', [
                        'idTutor' => $idTutor,
                        'idCourse' => $idCourse,
                        'idSubject' => $idSubject,
                        'course' => $course,
                        'user' => $user,
                        'subject' => $subject
                    ], function ($message) use ($email) {
                        $message->to($email, 'Visitor')->subject('Class Announcement');
                    });
                }
            }

            // Insert class records

            Mail::send('mailingTutor', [
                'idStudent' => $idStudent,
                'idCourse' => $idCourse,
                'idSubject' => $idSubject,
                'course' => $course,
                'user' => $user,
                'subject' => $subject
            ], function ($message) use ($emailTutor) {
                $message->to($emailTutor, 'Visitor')->subject('Class Announcement');
            });

            coursedetail::insert($coursedetail_records);
        }

        return view('client/staff/course', ['course' => $course, 'user' => $user, 'subject' => $subject]);
    }

    //POST() Method: function edit(REALLOCATE) a tutor for student
    public function postReallocateStaffCourse(Request $request)
    {
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        $coursedetail = coursedetail::all();

        $idTutor = $request->idTutor;

        foreach ($user as $us) {
            if ($us->id == $idTutor) {
                $emailTutor = $us->email;
            }
        }

        if (isset($request->idCoursedetail)) {
            $count2 = 0;

            // Submitted class
            //$idStudent = $request -> student;
            $id = $request->idCoursedetail;
            foreach ($coursedetail as $cd) {
                foreach ($id as $item) {
                    if ($cd->id == $item) {
                        foreach ($course as $co) {
                            if ($co->id == $cd->idCourse) {
                                $courseName = $co->courseName;
                            }
                        }
                        foreach ($subject as $sj) {
                            if ($sj->id == $cd->idSubject) {
                                $nameSubject = $sj->nameSubject;
                            }
                        }
                    }
                    if ($cd->id == $item) {
                        $idOldTutor = $cd->idTutor;
                        foreach ($user as $us) {
                            if ($us->id == $idOldTutor) {
                                $emailOldTutor = $us->email;
                            }
                        }
                    }
                }
            }

            Mail::send('mailingEditOldTutor', [
                'courseName' => $courseName,
                'nameSubject' => $nameSubject
            ], function ($message) use ($emailOldTutor) {
                $message->to($emailOldTutor, 'Visitor')->subject('Class Edit Announcement');
            });

            $idCoursedetail = $request->id;
            $idSubject = $request->idSubject;

            // Validate choose class


            // class records to be saved
            $idCoursedetail_records = [];
            $coursedetail_records = [];

            // Add needed information to class records
            foreach ($id as $req) {
                if (!empty($req)) {
                    foreach ($coursedetail as $cd) {
                        if ($cd->id == $req) {
                            foreach ($user as $us) {
                                if ($cd->idStudent == $us->id) {
                                    $email = $us->email;
                                }
                            }
                        }
                    }

                    Mail::send('mailingEdit', [
                        'idTutor' => $idTutor,
                        'idCoursedetail' => $req,
                        'course' => $course,
                        'user' => $user,
                        'subject' => $subject,
                        'coursedetail' => $coursedetail
                    ], function ($message) use ($email) {
                        $message->to($email, 'Visitor')->subject('Class Edit Announcement');
                    });

                    coursedetail::where(['id' => $req])->update(['idTutor' => $idTutor]);
                }
            }

            Mail::send('mailingEditTutor', [
                'idTutor' => $idTutor,
                'courseName' => $courseName,
                'nameSubject' => $nameSubject
            ], function ($message) use ($emailTutor) {
                $message->to($emailTutor, 'Visitor')->subject('Class Edit Announcement');
            });

        }

        return view('client.staff.editcourse',
            ['course' => $course, 'user' => $user, 'subject' => $subject])->with('notificate', 'Changed success');
    }

    //GET() Method: Get list of course for information course in tutor site
    public function getListCourse3()
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idTutor)
            foreach ($course as $co){
                if ($cd -> idCourse == $co -> id){
                    $array_course[] = $co -> id;
                }
            }
        }
        $unique_course = array_unique($array_course);
        return view('client.tutor.infoclass', ['coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'unique_course' => $unique_course]);
    }

    //GET() Method: Get list of student for selected course in tutor site
    public function getDetailClass($id)
    {
        $course = course::find($id);
        $coursedetail = coursedetail::all();
        $uploaddoc = uploaddoc::all();
        $subject = subject::all();
        $user = user::all();
        return view('client.tutor.detailclass',
            ['subject' => $subject, 'coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'uploaddoc' => $uploaddoc]);
    }

    //GET() Method: Get the detail information of the selected student
    public function getDetailStudent($id)
    {
        $user = User::find($id);
        $coursedetail = coursedetail::all();
        $subject = subject::all();
        $course = course::all();
        $role = role::all();
        return view('client.tutor.detailstudent',
            ['subject' => $subject, 'coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'role' => $role]);
    }

    //GET() Method: Get schedule for tutor site
    public function getSchedule($id)
    {
        $course = course::find($id);
        $scheduleslot = scheduleslot::all();
        $user = User::all();
        $schedule = schedule::all();

        return view('client.tutor.schedule', ['scheduleslot' => $scheduleslot, 'user' => $user, 'course' => $course, 'schedule' => $schedule]);
    }

    //GET() Method: Get list of schedule for tutor site
    public function getListSchedule()
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idTutor)
                foreach ($course as $co){
                    if ($cd -> idCourse == $co -> id){
                        $array_course[] = $co -> id;
                    }
                }
        }
        $unique_course = array_unique($array_course);
        return view('client.tutor.schedulelist', ['coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'unique_course' => $unique_course]);
    }
    //GET() Method: Get blogging for tutor site
    public function getBlogging($id)
    {
        $subject = subject::find($id);
        $blogging = blogging::all();
        $user = User::all();
        return view('client.tutor.blogging', [ 'subject' => $subject, 'user' => $user, 'blogging' => $blogging]);
    }

    //GET() Method: Get list of blogging for tutor site
    public function getListBlogging()
    {
        $coursedetail = coursedetail::all();
        $subject = subject::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idTutor)
                foreach ($subject as $sb){
                    if ($cd -> idSubject == $sb -> id){
                        $unique_subject[] = $sb -> id;
                    }
                }
        }
        $unique_subject = array_unique($unique_subject);
        return view('client.tutor.blogginglist', ['coursedetail' => $coursedetail, 'user' => $user, 'subject' => $subject, 'unique_subject' => $unique_subject]);
    }

    public function getBlogging2($id)
    {
        $subject = subject::find($id);
        $blogging = blogging::all();
        $user = User::all();
        return view('client.student.blogging', [ 'subject' => $subject, 'user' => $user, 'blogging' => $blogging]);
    }

    //GET() Method: Get list of blogging for tutor site
    public function getListBlogging2()
    {
        $coursedetail = coursedetail::all();
        $subject = subject::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idStudent)
                foreach ($subject as $sb){
                    if ($cd -> idSubject == $sb -> id){
                        $unique_subject[] = $sb -> id;
                    }
                }
        }
        $unique_subject = array_unique($unique_subject);
        return view('client.student.blogginglist', ['coursedetail' => $coursedetail, 'user' => $user, 'subject' => $subject, 'unique_subject' => $unique_subject]);
    }

    public function getSchedule2($id)
    {
        $course = course::find($id);
        $scheduleslot = scheduleslot::all();
        $user = User::all();
        $schedule = schedule::all();

        return view('client.student.schedule', ['scheduleslot' => $scheduleslot, 'user' => $user, 'course' => $course, 'schedule' => $schedule]);
    }

    //GET() Method: Get list of schedule for tutor site
    public function getListSchedule2()
    {
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idStudent)
                foreach ($course as $co){
                    if ($cd -> idCourse == $co -> id){
                        $array_course[] = $co -> id;
                    }
                }
        }
        $unique_course = array_unique($array_course);
        return view('client.student.schedulelist', ['coursedetail' => $coursedetail, 'user' => $user, 'course' => $course, 'unique_course' => $unique_course]);
    }

    //GET() Method: Get the uploaded document of the student
    public function getAllUploadDoc(){
        $uploaddoc = uploaddoc::all();
        $subject = subject::all();
        $user = User::all();
        return view('client.student.viewdoc', ['user' => $user, 'subject' => $subject, 'uploaddoc' => $uploaddoc]);
    }

    //GET() Method: Get the subject of the student
    public function getUploadStudent(){
        $coursedetail = coursedetail::all();
        $course = course::all();
        $subject = subject::all();
        $user = User::all();
        foreach ($coursedetail as $cd){
            if (Auth::user()->id == $cd -> idStudent)
                foreach ($subject as $sj){
                    if ($cd -> idSubject == $sj -> id){
                        $array_course[] = $sj -> id;
                    }
                }
        }
        $unique_subject = array_unique($array_course);
        return view('client.student.uploaddoc', ['coursedetail' => $coursedetail, 'user' => $user, 'subject' => $subject, 'unique_subject' => $unique_subject]);
    }

    //GET() Method: Get the detail information of the selected student upload document
    public function getUploadDetailStudent($id){
        $coursedetail = coursedetail::all();
        $subjectA = subject::all();
        $subject = subject::find($id);
        $user = User::all();
        return view('client.student.uploaddetail', ['subject' => $subject]);
    }

    //POST() Method: Upload the link to the database
    public function postUploadDetailStudent(Request $request, $id){
        $this -> validate($request,[
            'link' => 'required'
        ],[
            'link.required' => 'You need to post a link of your document from Google Drive'
        ]);

        $Uploaddoc = uploaddoc::all();
        $uploaddoc = new uploaddoc;

        $count = $Uploaddoc -> count();

        if ($count == 0)
        {
            $uploaddoc -> id = 1;
        }else{
            $array = $Uploaddoc[$count - 1] -> id + 1;
            $uploaddoc -> id = $array;
        }

        $uploaddoc -> idStudent = Auth::user() -> id;
        $uploaddoc -> idSubject = $id;
        $uploaddoc -> link = $request -> link;
        $uploaddoc -> comment = "";

        $uploaddoc -> save();

        return redirect('client/student/uploaddoc') -> with('notificate', 'Add successfully');
    }

    //POST() Method: Add the comment to student upload
    public function postAddCommentStudent(Request $request, $id){
        $this -> validate($request,[
            'comment' => 'required'
        ],[
            'comment.required' => 'You need to add a comment'
        ]);

        $uploaddoc = uploaddoc::find($id);
        $uploaddoc -> comment = $request -> comment;

        $idCourse = $request -> idCourse;

        $uploaddoc -> save();

        return redirect('client/tutor/detailclass/'.$idCourse) -> with('notificate', 'Add successfully');
    }

    //GET() Method: Get the detail information of the selected student upload document
    public function getEditUploadDetailStudent($id){
        $uploaddoc = uploaddoc::find($id);
        $subject = subject::all();
        foreach ($subject as $item) {
            if ($uploaddoc -> idSubject == $item -> id){
                $subName = $item -> nameSubject;
            }
        }
        return view('client.student.edituploaddetail', ['subName' => $subName, 'uploaddoc' => $uploaddoc]);
    }

    //POST() Method: Upload the link to the database
    public function postEditUploadDetailStudent(Request $request, $id){

        $this -> validate($request,[
            'link' => 'required'
        ],[
            'link.required' => 'You need to post a link of your document from Google Drive'
        ]);

        $uploaddoc = uploaddoc::find($id);

        $uploaddoc -> link = $request -> link;

        $uploaddoc -> save();

        return redirect('client/student/viewdoc') -> with('notificate', 'Add successfully');
    }
}
