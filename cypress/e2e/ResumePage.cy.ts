describe("ResumePage", () => {
	it("should load the resume page", () => {
	  cy.visit("/resume");
	  cy.contains("Professional summary").should("be.visible");
	  cy.contains("Core Skills").should("be.visible");
	  cy.contains("Tech Skills").should("exist");
	  cy.contains("Professional Experience").should("exist");
	  cy.contains("Education and Certifications").should("exist");
	  cy.contains("Language skills").should("exist");
	});
  });
  