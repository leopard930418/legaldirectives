<template>
    <form>
        <div class="border-burgundy border-[1px] mt-2 px-6 rounded-xl bg-logo-2">
            <div>
                <div class="max-h-[560px] overflow-hidden pt-2 overflow-y-auto no-scrollbar">
                    <div class="flex flex-col max-w-[50%]">
                        <InputLabel value="First Name"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Last Name"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Organization"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Address 1 *"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Address 2"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="City"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Phone"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Website"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Email *"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Secondary Email"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[50%]">
                        <InputLabel value="Service Plan Group"/>
                        <Listbox v-model="selectedPerson">
                            <div class="relative mt-1">
                                <ListboxButton
                                    class="relative w-full cursor-default rounded-lg bg-white pt-[.75rem] pb-[.5rem] pl-3 pr-10 text-left  focus:outline-none cursor-pointer border border-burgundy rounded-ld6">
                                    <span class="block truncate">{{ selectedPerson.name }}</span>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <ChevronDownIcon class="h-5 w-5 text-burgundy" aria-hidden="true"/>
                                    </span>
                                </ListboxButton>
                                <transition
                                    leave-active-class="transition duration-100 ease-in"
                                    leave-from-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <ListboxOptions
                                        class="absolute mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm z-[1]">
                                        <ListboxOption
                                            v-slot="{ active, selected }"
                                            v-for="person in people"
                                            :key="person.name"
                                            :value="person"
                                            as="template"
                                        >
                                            <li :class="[active ? 'bg-lighterred text-amber-900' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-10 pr-4',]">
                                                <span
                                                    :class="[selected ? 'font-medium' : 'font-normal', 'block truncate',]">{{
                                                        person.name
                                                    }}</span>
                                                <span v-if="selected"
                                                      class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-600">
                                                  <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                </span>
                                            </li>
                                        </ListboxOption>
                                    </ListboxOptions>
                                </transition>
                            </div>
                        </Listbox>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[250px]">
                        <InputLabel value="Preferred Year"/>
                        <Listbox v-model="selectedPerson">
                            <div class="relative mt-1">
                                <ListboxButton
                                    class="relative w-full cursor-default rounded-lg bg-white pt-[.75rem] pb-[.5rem] pl-3 pr-10 text-left  focus:outline-none    cursor-pointer border border-burgundy rounded-ld6">
                                    <span class="block truncate">{{ selectedPerson.name }}</span>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <ChevronDownIcon class="h-5 w-5 text-burgundy" aria-hidden="true"/>
                                    </span>
                                </ListboxButton>
                                <transition
                                    leave-active-class="transition duration-100 ease-in"
                                    leave-from-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <ListboxOptions
                                        class="absolute mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm z-[1]">
                                        <ListboxOption
                                            v-slot="{ active, selected }"
                                            v-for="person in people"
                                            :key="person.name"
                                            :value="person"
                                            as="template"
                                        >
                                            <li :class="[active ? 'bg-lighterred text-amber-900' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-10 pr-4',]">
                                                <span
                                                    :class="[selected ? 'font-medium' : 'font-normal', 'block truncate',]">{{
                                                        person.name
                                                    }}</span>
                                                <span v-if="selected"
                                                      class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-600">
                                                  <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                </span>
                                            </li>
                                        </ListboxOption>
                                    </ListboxOptions>
                                </transition>
                            </div>
                        </Listbox>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[250px]">
                        <InputLabel value="Prepaid Enrollments"/>
                        <div class="mt-1">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2 max-w-[250px]">
                        <InputLabel value="Member renewal month"/>
                        <Listbox v-model="selectedPerson">
                            <div class="relative mt-1">
                                <ListboxButton
                                    class="relative w-full cursor-default rounded-lg bg-white pt-[.75rem] pb-[.5rem] pl-3 pr-10 text-left  focus:outline-none    cursor-pointer border border-burgundy rounded-ld6">
                                    <span class="block truncate">{{ selectedPerson.name }}</span>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <ChevronDownIcon class="h-5 w-5 text-burgundy" aria-hidden="true"/>
                                    </span>
                                </ListboxButton>
                                <transition
                                    leave-active-class="transition duration-100 ease-in"
                                    leave-from-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <ListboxOptions
                                        class="absolute mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm z-[1]">
                                        <ListboxOption
                                            v-slot="{ active, selected }"
                                            v-for="person in people"
                                            :key="person.name"
                                            :value="person"
                                            as="template"
                                        >
                                            <li :class="[active ? 'bg-lighterred text-amber-900' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-10 pr-4',]">
                                                <span
                                                    :class="[selected ? 'font-medium' : 'font-normal', 'block truncate',]">{{
                                                        person.name
                                                    }}</span>
                                                <span v-if="selected"
                                                      class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-600">
                                                  <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                </span>
                                            </li>
                                        </ListboxOption>
                                    </ListboxOptions>
                                </transition>
                            </div>
                        </Listbox>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Default sponsor to pay?
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Renew through sponsor
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Contact non-renewals
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center  w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Send cards to
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Members</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Sponsors</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Send renewal cards to
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Members</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Sponsors</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4 ">
                        <div class="text-burgundy">
                            College card
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Minor Card
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Show card allergies on card?
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Show medical conditions on card?
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Allow client uploads
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="text-burgundy">
                            Active
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Yes</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">No</div>
                            </div>
                        </div>
                    </div>
                    <p class="text-burgundy text-[14px] mt-1">*Note Inactivating a sponsor will set all associated
                        members to retail</p>
                    <p class="text-[24px] text-darkburgundy tracking-[1.08px] mt-10">Administration</p>
                    <div class="flex flex-col">
                        <label for="first-name" class="block text-sm font-medium text-burgundy tracking-[0.5px]">Login
                            name</label>
                        <div class="mt-1 max-w-[50%]">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="first-name"
                               class="block text-sm font-medium sm:mt-px sm:pt-2 text-burgundy tracking-[0.5px]">Pin</label>
                        <div class="mt-1 max-w-[50%]">
                            <TextInput/>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-burgundy text-[14px] tracking-[0.5px]">Last Login</p>
                        <p class="text-[20px] tracking-[0.41px]">09-23-2022</p>
                    </div>
                    <p class="text-[24px] text-darkburgundy tracking-[1.08px] mt-10">Billing Information</p>
                    <div class="flex flex-col  mt-2">
                        <div class="text-burgundy text-[14px]">
                            Payment Type
                        </div>
                        <div class="flex justify-start mt-2 pl-6">
                            <div class="flex items-center  w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Check</div>
                            </div>
                            <div class="flex items-center w-[130px]">
                                <Checkbox/>
                                <div class="text-burgundy ml-5">Credit Card</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mt-10">
                        <p class="text-[24px] text-darkburgundy tracking-[1.08px] ">Assigned Documents</p>
                        <SecondaryButton type="submit" class="w-[100px] ml-2">
                            Add New
                        </SecondaryButton>
                    </div>
                    <div class="flex mt-4 text-burgundy">
                        <p class="w-[110px] tracking-[0.5px]">Include</p>
                        <p class="w-[80px] tracking-[0.5px]">Rank</p>
                        <p class="fw-[150px] ml-[40px] tracking-[0.5px]">Document Name</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">5 Wishes Document</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advance Directive</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class="w-[350px] ml-[40px] tracking-[0.41px]">Advance Directive for Health Care</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advance Health & Personal Care Directive</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advance Health Care Directive</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advance Healthcare Directive</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advanced Directives</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Advanced Health Care Proxy/ Living Will</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Agent for Disposition of Remains</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Alaska Living Will</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Anatomical Gift</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Authorized Decision Maker</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Combined Living Will & Healthcare Power of
                            Attorney</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Combined Living Will & Healthcare Surrogate</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Declaration for Life Sustaining Procedures</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Declaration of Guardian</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Designation of Health Care Agent for Minor(s)</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Designation of Patient Advocate</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Designee of Final Disposition</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Directive For Final Health Care</p>
                    </div>
                    <div class="flex items-center mt-5 ">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Directive to Physicians</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">DNR</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Durable General Power of Attorney</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Durable POA For Financial Decisions</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Durable Power of Attorney for Health Care</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Education Power of Attorney</p>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="w-[110px]">
                            <Checkbox class="ml-[15px]"/>
                        </div>
                        <div class="w-[80px]">
                            <TextInput/>
                        </div>
                        <p class=" ml-[40px] tracking-[0.41px]">Electric service provider letter</p>
                    </div>
                </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end mt-2">
                <PrimaryButton>Create New Sponsor</PrimaryButton>
            </div>
            <hr class="border-burgundy mt-4">
        </div>
    </form>
</template>

<script>
import Checkbox from "@/Components/Checkbox.vue"
import TextInput from "@/Components/TextInput.vue"
import InputLabel from "@/Components/InputLabel.vue"
import {CheckIcon, ChevronDownIcon} from "@heroicons/vue/24/solid"
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {ref} from "vue";
import {
    Listbox,
    ListboxButton,
    ListboxOptions,
    ListboxOption,

} from '@headlessui/vue'

const people = [
    {id: 1, name: '2022', unavailable: false},
    {id: 2, name: '2021', unavailable: false},
]

const selectedPerson = ref(people[0])

export default {
    name: "CreateSponsorForm",
    components: {
        Checkbox,
        TextInput,
        InputLabel,
        Listbox,
        ListboxButton,
        ListboxOptions,
        ListboxOption,
        CheckIcon,
        ChevronDownIcon,
        PrimaryButton,
        SecondaryButton
    },
    setup() {
        return {
            people, selectedPerson
        }
    }
}
</script>

<style scoped>

</style>
