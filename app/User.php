<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }


    public function hasAccess(array $permissions){

        foreach($this->roles as $role){
            if($role->hasAccess($permissions)){
                return true;
            }
        }

        return false;

    }
    public function inRole($roleSlug)
    {
        return $this->roles()->where('slug',$roleSlug)->count()==1;
    }

    public function posts()
    {
        return $this->hasMany(NewsEvent::class, 'user_id');
    }

    public function postss()
    {
        return $this->hasMany(NewsEvent1::class, 'user_id');
    }

    public function postsss()
    {
        return $this->hasMany(UpcomingEvent::class, 'user_id');
    }

    public function post1()
    {
        return $this->hasMany(TodayNews::class, 'user_id');
    }

    public function post2()
    {
        return $this->hasMany(Graduate::class, 'user_id');
    }

    public function post3()
    {
        return $this->hasMany(curriculum::class, 'user_id');
    }

    public function post4()
    {
        return $this->hasMany(Trimister1::class, 'user_id');
    }

    public function post5()
    {
        return $this->hasMany(Trimister2::class, 'user_id');
    }

    public function post6()
    {
        return $this->hasMany(Trimister3::class, 'user_id');
    }

    public function post7()
    {
        return $this->hasMany(Trimister4::class, 'user_id');
    }

    public function post8()
    {
        return $this->hasMany(Trimister5::class, 'user_id');
    }

    public function post9()
    {
        return $this->hasMany(Trimister6::class, 'user_id');
    }

    public function post10()
    {
        return $this->hasMany(Marketing::class, 'user_id');
    }

    public function post11()
    {
        return $this->hasMany(Finance::class, 'user_id');
    }

    public function post12()
    {
        return $this->hasMany(HRM::class, 'user_id');
    }

    public function post13()
    {
        return $this->hasMany(GeneralManagement::class, 'user_id');
    }

    public function post14()
    {
        return $this->hasMany(ManagementScience::class, 'user_id');
    }

    public function post15()
    {
        return $this->hasMany(ConcentrationMBATitle::class, 'user_id');
    }

    public function post16()
    {
        return $this->hasMany(MBAElective::class, 'user_id');
    }

    public function post17()
    {
        return $this->hasMany(MBAElectiveTitle::class, 'user_id');
    }

    public function post18()
    {
        return $this->hasMany(MBAEvaluateGrade::class, 'user_id');
    }

    public function post19()
    {
        return $this->hasMany(MBAEvaluateGradeTitle::class, 'user_id');
    }

    public function post20()
    {
        return $this->hasMany(Whychoose::class, 'user_id');
    }

    public function post21()
    {
        return $this->hasMany(Number::class, 'user_id');
    }

    public function post22()
    {
        return $this->hasMany(BcisGraduate::class, 'user_id');
    }

    public function post23()
    {
        return $this->hasMany(Curriculum_bcis::class, 'user_id');
    }

    public function post24()
    {
        return $this->hasMany(Semister1_bcis::class, 'user_id');
    }

    public function post25()
    {
        return $this->hasMany(Semister2_bcis::class, 'user_id');
    }

    public function post26()
    {
        return $this->hasMany(Semister3_bcis::class, 'user_id');
    }

    public function post27()
    {
        return $this->hasMany(Semister4_bcis::class, 'user_id');
    }

    public function post28()
    {
        return $this->hasMany(Semister5_bcis::class, 'user_id');
    }

    public function post29()
    {
        return $this->hasMany(Semister6_bcis::class, 'user_id');
    }

    public function post30()
    {
        return $this->hasMany(Semister7_bcis::class, 'user_id');
    }

    public function post31()
    {
        return $this->hasMany(Semister8_bcis::class, 'user_id');
    }

    public function post32()
    {
        return $this->hasMany(Concentration_bcis::class, 'user_id');
    }

    public function post33()
    {
        return $this->hasMany(Marketing_bcis::class, 'user_id');
    }

    public function post34()
    {
        return $this->hasMany(Bciselectivetitle::class, 'user_id');
    }

    public function post35()
    {
        return $this->hasMany(Bciselective::class, 'user_id');
    }

    public function post36()
    {
        return $this->hasMany(Bcisevaluategradetitle::class, 'user_id');
    }

    public function post37()
    {
        return $this->hasMany(Bcisevaluategrade::class, 'user_id');
    }

    public function post38()
    {
        return $this->hasMany(Graduate_eve::class, 'user_id');
    }

    public function post39()
    {
        return $this->hasMany(Curriculum_eve::class, 'user_id');
    }

    public function post40()
    {
        return $this->hasMany(Trimister1_eve::class, 'user_id');
    }

    public function post41()
    {
        return $this->hasMany(Trimister2_eve::class, 'user_id');
    }

    public function post42()
    {
        return $this->hasMany(Trimister3_eve::class, 'user_id');
    }

    public function post43()
    {
        return $this->hasMany(Trimister4_eve::class, 'user_id');
    }

    public function post44()
    {
        return $this->hasMany(Trimister5_eve::class, 'user_id');
    }

    public function post45()
    {
        return $this->hasMany(Trimister6_eve::class, 'user_id');
    }

    public function post46()
    {
        return $this->hasMany(Trimister7_eve::class, 'user_id');
    }

    public function post47()
    {
        return $this->hasMany(Trimister8_eve::class, 'user_id');
    }

    public function post48()
    {
        return $this->hasMany(Concentration_eve::class, 'user_id');
    }

    public function post49()
    {
        return $this->hasMany(Marketing_eve::class, 'user_id');
    }

    public function post50()
    {
        return $this->hasMany(Finance_eve::class, 'user_id');
    }

    public function post51()
    {
        return $this->hasMany(HRM_eve::class, 'user_id');
    }

    public function post52()
    {
        return $this->hasMany(GeneralManagement_eve::class, 'user_id');
    }

    public function post53()
    {
        return $this->hasMany(ManagementScience_eve::class, 'user_id');
    }

    public function post54()
    {
        return $this->hasMany(Mbaelectivetitle_eve::class, 'user_id');
    }

    public function post55()
    {
        return $this->hasMany(Mbaelective_eve::class, 'user_id');
    }

    public function post56()
    {
        return $this->hasMany(Mbaelective_eve::class, 'user_id');
    }

    public function post57()
    {
        return $this->hasMany(Mbaevaluategradetitle_eve::class, 'user_id');
    }

    public function post58()
    {
        return $this->hasMany(Mbaevaluategrade_eve::class, 'user_id');
    }

    public function post59()
    {
        return $this->hasMany(BbaGraduate::class, 'user_id');
    }

    public function post60()
    {
        return $this->hasMany(Curriculum_bba::class, 'user_id');
    }

    public function post61()
    {
        return $this->hasMany(Semister1_bba::class, 'user_id');
    }

    public function post62()
    {
        return $this->hasMany(Semister2_bba::class, 'user_id');
    }

    public function post63()
    {
        return $this->hasMany(Semister3_bba::class, 'user_id');
    }

    public function post64()
    {
        return $this->hasMany(Semister4_bba::class, 'user_id');
    }

    public function post65()
    {
        return $this->hasMany(Semister5_bba::class, 'user_id');
    }

    public function post66()
    {
        return $this->hasMany(Semister6_bba::class, 'user_id');
    }

    public function post67()
    {
        return $this->hasMany(Semister7_bba::class, 'user_id');
    }

    public function post68()
    {
        return $this->hasMany(Semister8_bba::class, 'user_id');
    }

    public function post69()
    {
        return $this->hasMany(Concentration_bba::class, 'user_id');
    }

    public function post70()
    {
        return $this->hasMany(Marketing_bba::class, 'user_id');
    }

    public function post71()
    {
        return $this->hasMany(Finance_bba::class, 'user_id');
    }

    public function post72()
    {
        return $this->hasMany(HRM_bba::class, 'user_id');
    }

    public function post73()
    {
        return $this->hasMany(GeneralManagement_bba::class, 'user_id');
    }

    public function post74()
    {
        return $this->hasMany(ManagementScience_bba::class, 'user_id');
    }

    public function post75()
    {
        return $this->hasMany(Bbaelectivetitle::class, 'user_id');
    }

    public function post76()
    {
        return $this->hasMany(Bbaelective::class, 'user_id');
    }

    public function post77()
    {
        return $this->hasMany(Bbaevaluategradetitle::class, 'user_id');
    }

    public function post78()
    {
        return $this->hasMany(Bbaevaluategrade::class, 'user_id');
    }

    public function post79()
    {
        return $this->hasMany(BiGraduate::class, 'user_id');
    }

    public function post80()
    {
        return $this->hasMany(Curriculum_bi::class, 'user_id');
    }

    public function post81()
    {
        return $this->hasMany(Semister1_bi::class, 'user_id');
    }

    public function post82()
    {
        return $this->hasMany(Semister2_bi::class, 'user_id');
    }

    public function post83()
    {
        return $this->hasMany(Semister3_bi::class, 'user_id');
    }

    public function post84()
    {
        return $this->hasMany(Semister4_bi::class, 'user_id');
    }

    public function post85()
    {
        return $this->hasMany(Semister5_bi::class, 'user_id');
    }

    public function post86()
    {
        return $this->hasMany(Semister6_bi::class, 'user_id');
    }

    public function post87()
    {
        return $this->hasMany(Semister7_bi::class, 'user_id');
    }

    public function post88()
    {
        return $this->hasMany(Semister8_bi::class, 'user_id');
    }

    public function post89()
    {
        return $this->hasMany(Concentration_bi::class, 'user_id');
    }

    public function post90()
    {
        return $this->hasMany(Bielectivetitle::class, 'user_id');
    }

    public function post91()
    {
        return $this->hasMany(Bielective::class, 'user_id');
    }

    public function post92()
    {
        return $this->hasMany(Bievaluategradetitle::class, 'user_id');
    }

    public function post93()
    {
        return $this->hasMany(Bievaluategrade::class, 'user_id');
    }

    public function post94()
    {
        return $this->hasMany(Marketing_tt::class, 'user_id');
    }

    public function post95()
    {
        return $this->hasMany(Finance_tt::class, 'user_id');
    }

    public function post96()
    {
        return $this->hasMany(HRM_tt::class, 'user_id');
    }

    public function post97()
    {
        return $this->hasMany(GeneralManagement_tt::class, 'user_id');
    }

    public function post98()
    {
        return $this->hasMany(TtGraduate::class, 'user_id');
    }

    public function post99()
    {
        return $this->hasMany(Curriculum_tt::class, 'user_id');
    }

    public function post100()
    {
        return $this->hasMany(Semister1_tt::class, 'user_id');
    }

    public function post101()
    {
        return $this->hasMany(Semister2_tt::class, 'user_id');
    }

    public function post102()
    {
        return $this->hasMany(Semister3_tt::class, 'user_id');
    }

    public function post103()
    {
        return $this->hasMany(Semister4_tt::class, 'user_id');
    }

    public function post104()
    {
        return $this->hasMany(Semister5_tt::class, 'user_id');
    }

    public function post105()
    {
        return $this->hasMany(Semister6_tt::class, 'user_id');
    }

    public function post106()
    {
        return $this->hasMany(Semister7_tt::class, 'user_id');
    }

    public function post107()
    {
        return $this->hasMany(Semister8_tt::class, 'user_id');
    }

    public function post108()
    {
        return $this->hasMany(Concentration_tt::class, 'user_id');
    }

    public function post109()
    {
        return $this->hasMany(Ttelectivetitle::class, 'user_id');
    }

    public function post110()
    {
        return $this->hasMany(Ttelective::class, 'user_id');
    }
    
    public function post111()
    {
        return $this->hasMany(Ttevaluategradetitle::class, 'user_id');
    }

    public function post112()
    {
        return $this->hasMany(Ttevaluategrade::class, 'user_id');
    }


    
    

}
