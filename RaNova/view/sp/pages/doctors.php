<div class="containers">
    <div class="holders">
            <div class="docholder doctors">
                <div class="info">
                    <p>Total Doctors</p>
                    <h3>600</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-user-plus'></i>
                </div>
            </div>

            <div class="docholder earnings">
                <div class="info">
                    <p>Active Doctors</p>
                    <h3>400</h3>
                </div>
                <div class="icon">
                    <i class='bxr  bx-user-check'></i> 
                </div>
            </div>

            <div class="docholder pending-doctors">
                <div class="info">
                    <p>Pending Doctors</p>
                    <h3>600</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-user-x'></i>
                </div>
            </div>

            <div class="docholder pending-hospitals">
                <div class="info">
                    <p>Suspended Doctors</p>
                    <h3>400</h3>
                </div>
                <div class="icon">
                    <i class='bxr  bx-cross-circle'></i> 
                </div>
            </div>
        </div>

        <div class="doctorFilters">
            <div class="filterGroup search">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search by doctor name">
            </div>

            <div class="filterGroup">
                <select>
                    <option value="">All Hospitals</option>
                    <option>Mercy Hospital</option>
                    <option>City Care</option>
                    <option>LifePoint Clinic</option>
                </select>
            </div>

            <div class="filterGroup">
                <select>
                    <option value="">All Specialties</option>
                    <option>Cardiology</option>
                    <option>Dermatology</option>
                    <option>General Practice</option>
                </select>
            </div>

            <div class="filterGroup">
                <select>
                    <option value="">All Status</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Suspended</option>
                </select>
            </div>
        </div>

        
        <div class="messageDocBtn">
            <button>Message Doctors</button>
        </div>

        <div class="messageHospitalModal">
            <div class="formholder">
                <form class="consultationForm">
                    <div class="formHeader">
                        <h2>Message All Doctors</h2>
                        <span class="closeForm">&times;</span>
                    </div>

                    <div class="formGroup">
                        <input type="text" placeholder="Message Title" required>
                    </div>

                    <div class="formGroup">
                        <textarea placeholder="Enter Message here........" required></textarea>
                    </div>


                    <button type="submit" class="submitBtn" onclick="over()">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <div class="hospitalTable">
            <h1>Doctors Information</h1>

            <div class="hospitalTableWrapper">
                <table class="hospitalModernTable">
                    <thead>
                        <tr>
                            <th>Doctor Name</th>
                            <th>Specialty</th>
                            <th>Hospital</th>
                            <th>Expirence</th>
                            <th>Appointments</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>DeraKhodes</td>
                            <td>Cardiologist</td>
                            <td>mercy hospital</td>
                            <td>5 years</td>
                            <td>6 Appointments</td>
                            <td><span class="hospitalStatus pending">Pending</span></td>

                            <td class="hospitalActionCell">
                                <div class="hospitalActionTrigger">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </div>

                                <div class="hospitalActionMenu">
                                    <div class="hospitalActionItem messageUser">
                                        <i class='bx bx-message-rounded-dots'></i>
                                        <p>Message Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-pause-circle'></i>
                                        <p>Suspend Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-show'></i>
                                        <p>View Details</p>
                                    </div>

                                    <div class="hospitalActionItem editHospital">
                                        <i class='bx bx-edit'></i>
                                        <p>Edit Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem danger">
                                        <i class='bx bx-trash'></i>
                                        <p>Delete Hospital</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>