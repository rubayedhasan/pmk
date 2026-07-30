const selectCircular = document.getElementById("select-circular");
selectCircular.addEventListener("change", function (e) {
  let selectedValue = this.value;

  if (selectedValue === "") {
    return;
  }

  fetch("../server/fetch_applied-list.php", {
    method: "post",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "circular_id=" + selectedValue,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data.length === 0) {
        document.getElementById("applied_list_tbody").innerHTML = `
            <tr>
                <td colspan="8" style="text-align:center;">No Data Found</td>
            </tr>
        `;
        return;
      }

      document.getElementById("applied_list_tbody").innerHTML = data
        .map(
          (candidate, idx) => `       
        <tr data-user-id="${candidate.user_id}" data-candidate-name = "${candidate.candidate_name}" data-candidate-phone="${candidate.user_id.split("-")[1]}">
                            <td>
                                <span class='circular-id'>
                                   ${idx + 1}
                                </span>
                            </td>
                            <td>
                                <figure class="candidate-image">
                                    <img src="https://careers.pmk-bd.org/assets/candidate_picture/${candidate.profile_picture}" alt="picture">
                                </figure>
                            </td>
                            <td>
                                <span class='circular-id'>
                                   ${candidate.user_id}
                                </span>
                            </td>
                            <td>
                                <span class='item-title'>
                                    ${candidate.candidate_name}
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>
                                    ${candidate.user_id.split("-")[1]}
                                </span>
                            </td>
                            <td>
                                <span class='open-position'>
                                    ${candidate.circular_title}
                                </span>
                            </td>
                            <td>
                                <div class='published-date'>
                                    <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-calendar-week'>
                                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                        <path d='M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12' />
                                        <path d='M16 3v4' />
                                        <path d='M8 3v4' />
                                        <path d='M4 11h16' />
                                        <path d='M7 14h.013' />
                                        <path d='M10.01 14h.005' />
                                        <path d='M13.01 14h.005' />
                                        <path d='M16.015 14h.005' />
                                        <path d='M13.015 17h.005' />
                                        <path d='M7.01 17h.005' />
                                        <path d='M10.01 17h.005' />
                                    </svg>
                                    ${candidate.applied_date}
                                </div>
                            </td>
                            <td>
                                <span class='circular-status cs-pending'>pending</span>
                            </td>
                            <td>
                                <div class='item-actions'>
                                    <a href="" title='view profile' class='action-btn btn-view'>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2" />
                                            <path d="M10 16h6" />
                                            <path d="M11 11a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M4 8h3" />
                                            <path d="M4 12h3" />
                                            <path d="M4 16h3" />
                                        </svg>
                                    </a>
                                    <a href='' title='change applicant status' class='action-btn btn-edit'>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-id">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -10" />
                                            <path d="M7 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M15 8l2 0" />
                                            <path d="M15 12l2 0" />
                                            <path d="M7 16l10 0" />
                                        </svg>
                                    </a>

                                    ${
                                      userRole
                                        ? `
                                        <a href="" title='delete' class='action-btn btn-delete' onclick="return confirm('Are you sure you want to delete this circular?')">
                                            <svg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icons-tabler-outline icon-tabler-trash-x'>
                                                <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                                <path d='M4 7h16' />
                                                <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                                                <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
                                                <path d='M10 12l4 4m0 -4l-4 4' />
                                            </svg>
                                        </a>
                                        `
                                        : ""
                                    }
                                        
                                </div>
                            </td>
                        </tr>
        `,
        )
        .join("");
    });
});

// live search functionality
const searchCandidate = document.getElementById("search-candidate");
searchCandidate.addEventListener("input", function () {
  const searchKeyword = this.value.trim().toLowerCase();

  const tableRows = document.querySelectorAll("#applied_list_tbody tr");
  let searchCount = 0;

  tableRows.forEach((dataRow) => {
    if (!dataRow.dataset.userId) {
      return;
    }

    const userId = dataRow.dataset.userId.toLowerCase();
    const candidateName = dataRow.dataset.candidateName.toLowerCase();
    const candidatePhone = dataRow.dataset.candidatePhone.toLowerCase();

    const matchedData =
      userId.includes(searchKeyword) ||
      candidateName.includes(searchKeyword) ||
      candidatePhone.includes(searchKeyword);

    if (matchedData) {
      dataRow.style.display = "";
      searchCount++;
    } else {
      dataRow.style.display = "none";
    }
  });
});
