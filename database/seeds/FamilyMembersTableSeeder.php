<?php

use App\Models\Recruitment\FamilyMembers;
use Illuminate\Database\Seeder;

class FamilyMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $family_members = new FamilyMembers;
        $family_members->name = 'father';
        $family_members->foreign_name = 'ayah';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'father in law';
        $family_members->foreign_name = 'ayah mertua';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'mother';
        $family_members->foreign_name = 'ibu';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'mother in law';
        $family_members->foreign_name = 'ibu mertua';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'brother';
        $family_members->foreign_name = 'saudara laki-laki';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'sister';
        $family_members->foreign_name = 'saudara perempuan';
        $family_members->save();

        $family_members = new FamilyMembers;
        $family_members->name = 'spouse';
        $family_members->foreign_name = 'pasangan(suami/istri)';
        $family_members->save(); 

        $family_members = new FamilyMembers;
        $family_members->name = 'children';
        $family_members->foreign_name = 'anak';
        $family_members->save();

    }
}
