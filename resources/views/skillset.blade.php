<x-common.index></x-common.index>

<div class=" w-1/3 mx-auto">

<form class=" bg-blue-100 rounded-xl mt-24 p-6">
<h1 class="text-2xl font-bold mb-4 text-center">
      Enter Your Information
    </h1>
<div class="w-full">
  <label for="skills" class="mt-2 mb-2 inline-block font-semibold">Selected Skills</label>
  <select id="skills" id="skills" class="text-slate-600 bg-blue-200 border-blue-200 border focus:outline-0 focus:border-blue-400  rounded-md block w-full p-2.5 ">
  <option class="boarder rounded-lg" selected>Select an option</option>
  <option value="Coding">Codding</option>
  <option value="Design">Design</option>
  <option value="Programming ">Programming </option>
  
</select>

</div>
<div class="w-full">
<label class="mt-6 mb-2 inline-block font-semibold" for="experience">Years of Experience:</label>
        <input class="rounded-lg text-center text-slate-600 bg-blue-200 border-blue-200 border focus:outline-0 focus:border-blue-400" type="number" name="experience" id="experience" min="0" required>

</div>
<div class="w-full">
<label class="mt-6 mb-2 inline-block font-semibold">Applying for Designation:</label><br>
        <input type="radio" name="designation" value="Software Engineer" required> Software Engineer<br>
        <input type="radio" name="designation" value="Graphic Designer" required> Graphic Designer<br>
        <input type="radio" name="designation" value="Marketing Specialist" required> Marketing Specialist

</div>

<div class="w-full text-center">
    <button type="submit" class="text-white font-medium  bg-blue-800 rounded-lg cursor-pointer hover:bg-blue-600 p-4 mt-8">Generate Questions</button>
    </div>
</form>
</div>